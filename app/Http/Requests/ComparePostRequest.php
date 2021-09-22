<?php

namespace App\Http\Requests;

use App\Models\Compare;
use Illuminate\Foundation\Http\FormRequest;

class ComparePostRequest extends FormRequest
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
            'payout'             => 'required|max:100',
            'factor'             => 'required|numeric|lt:1000|regex:/^\d+(\.\d{1,5})?$/',
            'irr'              => 'required|numeric|lt:1000|regex:/^\d+(\.\d{1,5})?$/',
        ];
    }

    public function persist(Compare $compare)
    {
        $compare->name             = $this->name;
        $compare->logo_path        = $this->logo_path;
        $compare->irr              = $this->irr;
        $compare->factor            = $this->factor;
        $compare->payout            = $this->payout;
        $compare->save();
    }
}
