<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOpinionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'short_description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'description' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'image.required' => 'Image is required',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg',
            'image.max' => 'Image must be less than 2MB',
            'short_description.required' => 'Short description is required',
            'short_description.string' => 'Short description must be a string',
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',
        ];
    }
}
