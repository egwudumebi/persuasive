<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewFormRequest extends FormRequest
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
            'doctor_id' => ['required', 'integer'],
            'patient_id' => ['required', 'integer'],
            'title' => ['required', 'string', 'max:30'],
            'rating' => ['required', 'min:1', 'max:5'],
            'content' => ['required', 'string', 'max:100'],
        ];
    }
}
