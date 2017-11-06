<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
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
            'photo_id' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'street' => 'required',
            'city' => 'required',
            'region' => 'required',
            'brgy' => 'required',
            'zipcode' => 'required',
            'birthdate' => 'required',
            'birthplace' => 'required',
            'marital_id' => 'required',
            'aphone' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'ename' => 'required',
            'relationship' => 'required',
            'eaddress' => 'required',
            'econtact' => 'required',
            'ealcontact' => 'required',
            'employeeid' => 'required',
            'role_id' => 'required',
            'started_date'=>'required',
            'department_id' => 'required',
            'salary' => 'required',
        ];
    }
}
