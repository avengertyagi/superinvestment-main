<?php

namespace App\Traits;

use App\Digio\DigioServices;

trait Kyc
{
    public function doKycFirstStep()
    {
        $digio_services = new DigioServices();
        $name = $this->name;
        $email = $this->email;
        $pan_image = $this->kycData->pan_front_path;
        $aadhar_front_image = $this->kycData->adhar_front_path;
        $aadhar_back_image = $this->kycData->adhar_back_path;
        $prepared_data = $digio_services->prepareData($name,$email,$pan_image,$aadhar_front_image,$aadhar_back_image);
        // dd(json_encode($prepared_data));
        $response = $digio_services->generateDoc($prepared_data);
        // dd($response->json());
        if($response->successful())
        {
            $data =  $response->json();
            return $data['id'];

        }
        return '';
    }


}
