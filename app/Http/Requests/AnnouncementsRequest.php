<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementsRequest extends FormRequest
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
            'name'=>'required|min:5',
            'price'=>'required',
            'category'=>'required',
        ];


    }

    public function messages()
    {
        return [
            'name.required'=>'Questo campo è obbligatorio',
            'name.min'=>'Il nome deve contenere minmo 5 caratteri',
            'price.required'=>'Questo campo è obbligatorio',
            'category.required'=>'Questo campo è obbligatorio',
        ];
    }
}
