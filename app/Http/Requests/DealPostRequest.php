<?php

namespace App\Http\Requests;

use App\Models\Deal;
use Illuminate\Foundation\Http\FormRequest;

class DealPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'             => 'required|max:100',
            'irr'              => 'required|numeric|lt:1000|regex:/^\d+(\.\d{1,5})?$/',
            'pre_tax'          => 'required|numeric',
            'post_tax'         => 'required|numeric',
            'tax'              => 'required|numeric',
            'tenure'           => 'required|numeric',
            'tenure_type'      => 'required',
            'min_investment'   => 'required|numeric|gt:0',
            'total_investment' => 'required|numeric|gte:min_investment|lt:2147483640',
            'investment'       => 'numeric|lt:total_investment',
        ];
    }

    public function persist(Deal $deal)
    {
        $deal->name             = $this->name;
        //$deal->slug             = $this->description;
        $deal->logo_path        = $this->logo_path;
        $deal->banner_path        = $this->banner_path;
        $deal->irr              = $this->irr;
        $deal->pre_tax          = $this->pre_tax;
        $deal->post_tax         = $this->post_tax;
        $deal->tax              = $this->tax;
        $deal->tenure           = $this->tenure;
        $deal->tenure_type      = $this->tenure_type;
        $deal->min_investment   = $this->min_investment;
        $deal->total_investment = $this->total_investment;
        $deal->investment       = $this->investment;
        $deal->save();
    }
}
