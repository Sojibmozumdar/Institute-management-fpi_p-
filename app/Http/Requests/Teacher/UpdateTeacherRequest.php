<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'name'      => 'required|string|max:255',
        'email'     => 'required|email',
        'technology'=> 'required',
        'phone'     => 'required',
        'job_title' => 'required',
        'picture'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // Optional on update
        ];
    }
}
