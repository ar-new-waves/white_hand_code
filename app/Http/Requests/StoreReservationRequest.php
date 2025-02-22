<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'offer_id' => ['array','required'],
            'offer_id.*' => ['required', 'exists:offers,id'],
            'name' =>
            [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'phone' =>
            [
                'required',
            ],

            // 'branch_id' => ['required', 'exists:branches,id'],
        ];
    }
}
