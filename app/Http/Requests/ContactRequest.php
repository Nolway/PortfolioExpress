<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'bail|required|max:150',
            'firm' => 'bail|max:150',
            'object' => 'bail|required|max:150',
            'mail' => 'bail|required|email',
            'message' => 'bail|required|max:1000'
        ];
    }

}
