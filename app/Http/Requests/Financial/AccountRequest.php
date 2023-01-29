<?php

namespace App\Http\Requests\Financial;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'agency' => 'nullable|max:255|string',
            'account_number' => 'nullable|max:255|string',
            'initial_balance' => 'nullable|numeric',
            'observation' => 'nullable|max:65000',
        ];
    }
}
