<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
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
            'id_number'=> 'required',
            'name' => 'required',
            'photo_id' => 'required',
            'contactNumber' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'email' => 'required',
        ];
    }

    public function attributes()
    {
        return[
            'id_number' => 'Identification Number',
            'name' => 'Complete Name',
            'photo_id' => 'Photo',
            'contactNumber' => 'Contact Number',
            'address' => 'Complete Address',
            'birthday' => 'Date of Birth',
            'email' => 'Email Address',
        ];

    }
}
