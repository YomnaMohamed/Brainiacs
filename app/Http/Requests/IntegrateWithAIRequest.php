<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntegrateWithAIRequest extends FormRequest
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
            'attachment' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'disease_category' => 'required|in:schizophrenia,epilepsy'
        ];
    }
}
