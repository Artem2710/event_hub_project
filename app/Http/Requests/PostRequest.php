<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 02.10.2018
 * Time: 14:49
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'title' => 'required|',
            'type' => 'required|',
            'dateTime' => 'required|',
            'description' => 'required|min:10|max:1000',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.'
        ];
    }
}