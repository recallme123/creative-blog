<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'exists:categories,id|nullable',
            'tag' => 'exists;tags,id',
            'image' => 'image |mimes:png,jpg,jpeg|max:2048',
            'published' => 'in:0,1',

        ];
    }
}
