<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'post'        => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image'       => ['nullable', 'image:jpg,jpeg,png,webp', 'max:3000']
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'post.required' => 'Request validation: A title is required',
    //         'image.image' => 'Request validation: An extension is not permited',
    //     ];
    // }       
}
