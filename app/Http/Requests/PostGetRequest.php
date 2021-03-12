<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostGetRequest extends FormRequest
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
            'filter.post_category_id' => 'integer|between:0,18446744073709551615',
            'filter.admin_id' => 'integer|between:0,18446744073709551615',
            'filter.title' => 'string|min:2|max:128',
            'filter.description' => 'string|min:2|max:255',
            'filter.content' => 'string|min:2|max:65535',
            'filter.published' => 'boolean',
            'filter.deleted_at' => 'date',
            'filter.created_at' => 'date',
            'filter.updated_at' => 'date',
            'filter.posts\.id' => 'integer|between:0,18446744073709551615',
            'filter.posts\.post_category_id' => 'integer|between:0,18446744073709551615',
            'filter.posts\.admin_id' => 'integer|between:0,18446744073709551615',
            'filter.posts\.title' => 'string|min:2|max:128',
            'filter.posts\.description' => 'string|min:2|max:255',
            'filter.posts\.content' => 'string|min:2|max:65535',
            'filter.posts\.published' => 'boolean',
            'filter.posts\.deleted_at' => 'date',
            'filter.posts\.created_at' => 'date',
            'filter.posts\.updated_at' => 'date',
            'filter.postCategory\.id' => 'integer|between:0,18446744073709551615',
            'filter.postCategory\.name' => 'string|min:2|max:128',
            'filter.postCategory\.deleted_at' => 'date',
            'filter.postCategory\.created_at' => 'date',
            'filter.postCategory\.updated_at' => 'date',
            'filter.admin\.id' => 'integer|between:0,18446744073709551615',
            'filter.admin\.name' => 'string|min:2|max:128',
            'filter.admin\.email' => 'string|email|min:11|max:128',
            'filter.admin\.password' => 'string|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/',
            'filter.admin\.deleted_at' => 'date',
            'filter.admin\.created_at' => 'date',
            'filter.admin\.updated_at' => 'date',
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:1,100',
            'search' => 'nullable|string|min:3|max:60',
        ];
    }
}
