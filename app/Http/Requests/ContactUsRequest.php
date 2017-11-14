<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'email' => 'required|email',
            'cell' => 'required|numeric|digits:10',
            'message' => 'required|min:15'
        ];
    }

    /**
     * Custom messages
     */
//    public function messages() {
//        return [
//            'name.required' => "The name field is required.",
//            'surname.required' => "The name field is required.",
//            'email.required' => "The email field is required.",
//            'message.required' => "The message field is required."
//        ];
//    }
}
