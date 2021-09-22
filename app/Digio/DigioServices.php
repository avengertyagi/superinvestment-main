<?php

namespace App\Digio;

use GuzzleHttp;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DigioServices
{
    protected $id;
    protected $secret;
    protected $mode;
    protected $url;
    protected $sandbox_url = 'https://ext.digio.in:444';
    protected $prod_url = 'https://api.digio.in';

    public function __construct()
    {
        $this->id = config('services.digio.id');
        $this->secret = config('services.digio.secret');
        $this->mode = config('services.digio.mode');
        $this->url = $this->mode == 'sandbox' ? $this->sandbox_url : ($this->mode == 'production' ? $this->prod_url : '');
    }

    public function generateDoc($data)
    {


        $current_uri = '/v2/client/template/multi_templates/create_sign_request';
        $response = Http::withHeaders(['authorization' => 'Basic ' . base64_encode($this->id . ':' . $this->secret)])->acceptJson()
            ->POST($this->url . $current_uri, $data);
        return $response;
    }

    public function prepareData($name,$email, $pan_card_image, $aadhar_front_image, $aadhar_back_image)
    {
        $data =
            [
                'templates' =>
                [
                    [
                        "template_key" => "TMP210818192257436L1GCL8MF5FOURZ",
                        "template_values" => [
                            'name' => $name,
                            "Signer_1" => "Rishabh",
                            "name_1" => "31/07/2017",
                            "Signer_2" => "Upman"

                        ],
                        "images" => [
                            "pan_card_image" => $this->getFileDetail($pan_card_image),
                            "aadhaar_front_image" => $this->getFileDetail($aadhar_front_image),
                            "aadhaar_back_image" => $this->getFileDetail($aadhar_back_image),
                        ],
                    ]



                ],
                "signers" => [
                    [
                        "identifier" => $email,
                        "name" => $name,
                        "sign_type" => "electronic"
                    ],

                ],
                "expire_in_days" => 10,
                "send_sign_link" => false,
                "notify_signers" => false,
                "display_on_page" => "custom"

            ];



        return $data;
    }

    protected function getFileDetail($path)
    {
        $file_path =  Storage::path($path);
        // $file = getimagesize($file_path);
        return [

            "content" => base64_encode(file_get_contents($file_path)),
            "length" => 3000000,
            "width" => 3000000,
            "type" => 'PNG'                              //mention one

        ];
    }
}
