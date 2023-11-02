<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetRequest extends FormRequest
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
            'name' => 'required | string | max:50',
            'en_name' => 'required | string | max:50',
            'radius' => 'required | integer',
            'weight' => 'required | integer',
        ];
    }
    
    public function attributes()
    {
        return [
            'body' => 'コメント',
        ];
    }
}
