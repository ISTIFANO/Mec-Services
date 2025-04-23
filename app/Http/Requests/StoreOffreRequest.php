<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOffreRequest extends FormRequest
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
            'vehicule' => 'required|string|max:255',
            'tags' => 'required|array|min:1',
            'duree_disponibilite' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'budjet' => 'required|numeric|max:999999.99',
            'categorie' => 'required|integer|exists:categories,id'

        ];
    }
}
