<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class avto_request extends FormRequest
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
    public function rules(): array
    {
        return [
            'marka'=> 'required|alpha',
            'model'=> 'required|alpha',
            'color'=> 'required|alpha',
            'gos_num'=> 'required|unique:avtos,gos_num|size:8|alpha_num|regex:/[А-Я]{1}[0-9]{3}[А-Я]{2}[0-9]{2}/u'
        ];
    }
}
