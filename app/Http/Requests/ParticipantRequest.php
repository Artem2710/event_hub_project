<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 10.10.2018
 * Time: 00:45
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'event_id' => 'required|',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.'
        ];
    }
}