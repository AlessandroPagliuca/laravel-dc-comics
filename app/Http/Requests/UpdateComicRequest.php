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
            'title' => 'required|max:255|min:3',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required',
            'type' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Non deve superare 255 caratteri",
            'title.min' => "Deve contenere almano 3 caratteri",

            'description.required' => "La descrizione è obbligatoria",

            'thumb.required' => "La url dell'immagine è obbligatoria",

            'price.required' => "Il prezzo è obbligatoria",
            'price.max' => 'Lunghezza massima 255 caratteri',

            'series.required' => "Il prezzo è obbligatoria",
            'series.max' => 'Lunghezza massima 255 caratteri',

            'sale_date.required' => "La data è obbligatoria",

            'type.required' => 'Il campo è obbligatorio',
            'type.max' => 'Lunghezza massima 255 caratteri',

        ];
    }
}