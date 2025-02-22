<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $id = $this->route()->parameter('category');
        $data = [
            'name' => ['required', 'string', 'min:3', 'max:255', 'unique:categories,name,' . $id],
            'word' => 'required|string',
            'image' => "required|image",
            'pixel_script' => 'nullable|string',
        ];
        if ($this->isMethod('PUT')) {
            $data['image'] = "nullable|image";
        }
        return $data;
    }
}
