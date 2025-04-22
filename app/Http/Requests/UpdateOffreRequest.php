<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOffreRequest extends FormRequest
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
        'vehicule' => 'required|exists:vehicules,id',
        'tags' => 'required|array|min:1',
        'tags.*' => 'required|exists:tags,id',
        'duree_disponibilite' => 'required|date',
        'image' => 'nullable|image|max:2048',
        'titre' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'user' => 'required|exists:users,id',
        'budjet' => 'required|numeric|max:999999.99',
        'categorie' => 'required|exists:categories,id',
      
        ];
    }
}
