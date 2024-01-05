<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreAfterEventReportRequest extends FormRequest
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
            'title' => 'required|string|max:255|min:3',
            'op_leader' => 'required|string',
            'op_date' => 'date',
            'op_summary' => 'required|string',
            'op_went_well' => 'required|string',
            'op_cover_img' => 'image|mimes:png,jpg,jpeg|max:12288',
            'op_can_be_improved' => 'required|string',

        ];
    }
}

