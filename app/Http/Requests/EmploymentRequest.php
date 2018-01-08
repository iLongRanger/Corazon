<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmploymentRequest extends FormRequest
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
            //
            'name'=>'required',
            'department_id'=>'required',
            'role_id'=>'required',
            'salary'=>'required',
            'dateHired'=>'required',
            'status'=>'required',

        ];

    }
    public function attributes()
    {
        return[

            'name' => 'Employee Name',
            'department_id' => 'Department',
            'role_id' => 'Role',
            'salary' => 'Salary',
            'dateHired' => 'Date hired',
            'staus' => 'status',
        ];

    }
}
