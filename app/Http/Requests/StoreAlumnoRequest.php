<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreAlumnoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function authorize():bool{
        return true;
    }

    public function rules(): array
    {
        return [
            "nombre" => "required|string|min:3|max:10",
            "dni" =>[
                "required",
                "string",
                "size:9",
                "unique:alumnos,dni",
                "regex:/^[0-9]{8}[A-Z]$/",
            ],
            "email" =>"required|string|email|unique:alumnos,email",
        ];
    }
}
