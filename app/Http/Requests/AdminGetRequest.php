<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminGetRequest extends FormRequest
{
    /**
     * Determine if the current user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
//        return (auth()->guard('api')->check() || auth()->guard('cms-api')->check());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'filter.id' => 'integer|between:0,18446744073709551615',
            'filter.name' => 'string|min:2|max:128',
            'filter.email' => 'string|email|min:11|max:128',
            'filter.password' => 'string|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/',
            'filter.role' => 'string|min:2|max:45',
            'filter.deleted_at' => 'date',
            'filter.created_at' => 'date',
            'filter.updated_at' => 'date',
            'filter.admins\.id' => 'integer|between:0,18446744073709551615',
            'filter.admins\.name' => 'string|min:2|max:128',
            'filter.admins\.email' => 'string|email|min:11|max:128',
            'filter.admins\.password' => 'string|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/',
            'filter.admins\.role' => 'string|min:2|max:45',
            'filter.admins\.deleted_at' => 'date',
            'filter.admins\.created_at' => 'date',
            'filter.admins\.updated_at' => 'date',
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:1,100',
            'search' => 'nullable|string|min:3|max:60',
        ];
    }
}
