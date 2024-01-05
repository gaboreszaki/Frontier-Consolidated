<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateCommunityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'layout' => 'required|string',
            'title' => 'required|string|max:255|min:3',
            'content' => 'required|string|max:450|min:3',
//            'background_image' => 'string',
            'is_pinned' => 'boolean',
            'priority' => 'integer|max:100',
        ];
    }
}
