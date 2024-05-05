<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageRequest extends FormRequest
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
            
            "name" => "required|string|max:255|min:2",
            "email" => "required|string",
            "oggetto" => "required|string",
            "assistenza"=>"required|string|max:255|min:10",
            "image"=> "mimes:bmp,png,jpeg,webpl,jpg"
        ];
    }
    public function messages(){
        return [
            'name.max' => 'Devi inserire il nome di massimo 255 caratteri',
            'name.min' => 'Devi inserire il nome di minimo 2 caratteri',
            'name.required' => 'Devi inserire il nome',
            'name.string' => 'Il nome deve essere composto di lettere e parole',
            'email.required'=>'Devi inserire la mail',
            'email.string'=>'Devi inserire una mail valida',
            'oggetto.required'=>'Devi inserire un oggetto',
            'oggetto.string'=>'L\'oggetto deve essere composto di lettere e parole',
            'assistenza.required'=>'Devi inserire l\'assistenza',
            'assistenza.string'=>'L\'assistenza deve essere composta di lettere e parole',
            'assistenza.max'=>'Devi inserire assistenza di massimo 255 caratteri',
            'assistenza.min'=>'Devi inserire assistenza di minimo 2 caratteri',
            'image.mimes' => 'Inserisci immagine nei formati corretti: bmp,png,jpeg,webpl,jpg',
        ];
    }
}
