<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255|min:3',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'required|max:20',
            'series' => 'required|max:20',
            'sale_date' => 'required|max:20',
            'type' => 'nullable|max:20',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'description.max' => 'La descrizione deve avere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo deve avere massimo :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.max' => 'La serie deve avere massimo :max caratteri',
            'sale_date.required' => 'La data di vendita è obbligatoria',
            'sale_date.max' => 'La data di vendita deve avere massimo :max caratteri',
        ];
    }
}
