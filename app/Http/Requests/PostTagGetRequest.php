<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostTagGetRequest extends FormRequest
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
            'filter.post_id' => 'integer|between:0,18446744073709551615',
            'filter.tag_id' => 'integer|between:0,18446744073709551615',
            'filter.post_tags\.id' => 'integer|between:0,18446744073709551615',
            'filter.post_tags\.post_id' => 'integer|between:0,18446744073709551615',
            'filter.post_tags\.tag_id' => 'integer|between:0,18446744073709551615',
            'filter.post\.id' => 'integer|between:0,18446744073709551615',
            'filter.post\.post_category_id' => 'integer|between:0,18446744073709551615',
            'filter.post\.admin_id' => 'integer|between:0,18446744073709551615',
            'filter.post\.title' => 'string|min:2|max:128',
            'filter.post\.description' => 'string|min:2|max:255',
            'filter.post\.content' => 'string|min:2|max:65535',
            'filter.post\.published' => 'boolean',
            'filter.post\.deleted_at' => 'date',
            'filter.post\.created_at' => 'date',
            'filter.post\.updated_at' => 'date',
            'filter.tag\.id' => 'integer|between:0,18446744073709551615',
            'filter.tag\.name' => 'string|min:2|max:64',
            'filter.tag\.deleted_at' => 'date',
            'filter.tag\.created_at' => 'date',
            'filter.tag\.updated_at' => 'date',
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:1,100',
            'search' => 'nullable|string|min:3|max:60',
        ];
    }
}
