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

        //regex:/^[a-zA-Z]+$/
            'name' => 'required | string | max:50',
            'en_name' => 'required | string | max:50 | regex:/^[a-zA-Z]+$/',
            'radius' => 'required | integer | max:1000',
            'weight' => 'required | integer | max:1000',
        ];
    }
    
    public function attributes()
    {
        return [
            'body' => 'コメント',
        ];
    }
}
