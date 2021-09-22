<?php

namespace App\Http\Requests;

use App\Models\Faq;
use Illuminate\Foundation\Http\FormRequest;

class FaqPostRequest extends FormRequest
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
            'title'             => 'required|max:200',
        ];
    }

    public function persist(Faq $faq)
    {
        $faq->title        = $this->title;
        $faq->faqs        = $this->faqs;
        $faq->sort        = $this->sort??0;
        $faq->save();
    }
}
