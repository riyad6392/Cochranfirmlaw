<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMediaRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'video_link' => 'required|string',
            'short_description' => 'required|string',
            'thumbal' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'description' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'thumbal.required' => 'thumbal is required',
            'thumbal.image' => 'thumbal must be an image',
            'thumbal.mimes' => 'thumbal must be a file of type: jpeg, png, jpg',
            'thumbal.max' => 'thumbal must be less than 2MB',
            'video_link' => 'video_link is required',
            'video_link' => 'video_link must be a string',
            'short_description.required' => 'Short description is required',
            'short_description.string' => 'Short description must be a string',
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',

        ];
    }
}
