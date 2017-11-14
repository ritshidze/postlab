<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageDetailsRequest extends FormRequest
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
            'location' => 'required|min:15',
            'destination' => 'required|min:15',
            'description' => 'required|min:10'
        ];
    }

    /**
     * Custom messages
     */
    public function messages()
    {
        return [
            'location.min' => "Provide a clear package pickup location.",
            'destination.min' => "Provide a clear package destination.",
            'destination.min' => "Provide a clear package description."
        ];
    }

}
