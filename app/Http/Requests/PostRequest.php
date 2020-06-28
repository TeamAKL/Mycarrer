<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'position' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string'],
            'employer_type' => ['required', 'string'],
            'employer_number' => ['required', 'integer'],
            'min_salary' => ['required', 'integer'],
            'max_salary' => ['required', 'integer'],
            'salary_unit' => ['required', 'string'],
            'department' => ['required', 'string'],
            'department' => ['required', 'string'],
            'job_requirement' => ['required', 'string', 'max:255'],
            'job_description' => ['required', 'string', 'max:255'],
            'company_id' => ['required', 'integer']
        ];
    }
}
