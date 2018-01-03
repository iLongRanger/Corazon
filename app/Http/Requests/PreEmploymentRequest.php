<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreEmploymentRequest extends FormRequest
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
            'fileNo' => 'required',
            'name' => 'required', 
            'status' => 'required',
        ];
    }
    public function attributes() 
    {
        return[
        'fileNo' => 'File Number',
        'name' => 'Applicant name',
        'status' => 'You need to choose a status',
        ];
    }
}
