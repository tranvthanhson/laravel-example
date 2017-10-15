<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'content' => 'required|between:4,10',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'You must type this field.',
            'content.between' => 'Your content ":input". You must type at least :min and :max',
        ];
    }
}
