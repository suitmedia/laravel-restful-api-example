<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostSaveRequest extends FormRequest
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
            'post_category_id' => 'required|integer|between:0,18446744073709551615',
            'title' => 'required|string|min:2|max:128',
            'description' => 'required|string|min:2|max:255',
            'content' => 'required|string|min:2|max:65535',
            'published' => 'required|boolean',
        ];
    }
}
