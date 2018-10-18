<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.10.2018
 * Time: 15:17
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'type' => 'required|',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'что-то'
        ];
    }
}