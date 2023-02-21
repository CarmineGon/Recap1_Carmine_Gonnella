<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'homeprodu'=>'required',
            'price'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo e obbligatorio',
            'homeprodu.required' => 'La casa produtrice e obbligatorio',
            'price.required' => 'Il prezzo e obbligatorio',   
        ];
    }
}
