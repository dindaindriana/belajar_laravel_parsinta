<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user?->id)], //$this->user?->id ini artinya jika $this->user ada (atau sudah ada id yang artinya user sudah dibuat) maka abaikan rule agar user tersebut tetap bisa pakai email yang telah dibuat sebelumnya, tapi jika $this->user tidak ada (atau belum ada id atu user belum dibuat) maka rule berlaku yaitu email tidak boleh sama dengan id yang lain.
            'password' => ['required', 'min:8'],    
        ];
    }
}
