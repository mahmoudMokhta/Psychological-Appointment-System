<?php

namespace App\Http\Requests\Auth\Patient;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'max:255'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
