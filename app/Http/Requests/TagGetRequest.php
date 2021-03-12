<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagGetRequest extends FormRequest
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
            'filter.name' => 'string|min:2|max:64',
            'filter.deleted_at' => 'date',
            'filter.created_at' => 'date',
            'filter.updated_at' => 'date',
            'filter.tags\.id' => 'integer|between:0,18446744073709551615',
            'filter.tags\.name' => 'string|min:2|max:64',
            'filter.tags\.deleted_at' => 'date',
            'filter.tags\.created_at' => 'date',
            'filter.tags\.updated_at' => 'date',
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:1,100',
            'search' => 'nullable|string|min:3|max:60',
        ];
    }
}
