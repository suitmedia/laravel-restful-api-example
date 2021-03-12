<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthGetTokenRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|min:11|max:128',
            'password' => 'required|string',
        ];
    }
}
