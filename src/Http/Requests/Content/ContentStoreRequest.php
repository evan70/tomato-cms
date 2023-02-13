<?php

namespace TomatoPHP\TomatoCms\Http\Requests\Content;

use Illuminate\Foundation\Http\FormRequest;

class ContentStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                        'type_id' => 'nullable|exists:types,id',
            'category_id' => 'nullable|exists:categories,id',
            'model_id' => 'nullable',
            'model_type' => 'nullable|max:255|string',
            'title' => 'required|max:255|string',
            'slug' => 'required|max:255|string',
            'body' => 'required',
            'short_description' => 'nullable|max:65535',
            'published' => 'nullable',
            'featured' => 'nullable'
        ];
    }
}