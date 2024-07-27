<?php

namespace App\Http\Requests;

use App\Trait\ValidationErrorMessageTrait;
use Illuminate\Foundation\Http\FormRequest;

class CreateHeroSectionRequest extends FormRequest
{
    use ValidationErrorMessageTrait;
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
            'sub_title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'learn_more_link' => 'required|string',
            'contact_us_link' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'sub_title.required' => 'Sub Title is required',
            'sub_title.string' => 'Sub Title must be a string',
            'image.required' => 'Image is required',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg',
            'image.max' => 'Image must be less than 2MB',
            'learn_more_link.required' => 'Learn More Link is required',
            'learn_more_link.string' => 'Learn More Link must be a string',
            'contact_us_link.required' => 'Contact Us Link is required',
            'contact_us_link.string' => 'Contact Us Link must be a string',
        ];
    }
}
