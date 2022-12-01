<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userup_request extends FormRequest
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
            'family'=> 'required|alpha',
            'name'=> 'required|alpha',
            'name_father'=> 'required|alpha',
            'telephone'=> 'required|regex:/(7)[0-9]{10}/|size:11',
        ];
    }
}
