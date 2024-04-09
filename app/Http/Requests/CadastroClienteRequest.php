<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class ClientesFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:120',
            'email'=> 'required|max:120|email|unique:clientes,email',
            'senha'=>'required',
            'telefone' => 'required|max:11|min:10',
            'endereco'=>'required|max:120',
            'imagem' => 'required'
            
        ];
    }

    public function failedValidation (Validator $validator){
        throw new HttpResponseException(response()->json([
            'sucess' => false,
            'error' => $validator->errors()
        ]));
    }

    public Function messages(){
        return [
            'nome.required'=> 'O campo nome é obrigatorio',
            'nome.max' => 'o campo nome deve conter no maximo 120 caracteres',
            'telefone.required' =>'Telefone obrigatoria',
            'telefone.max' => 'Telefone deve conter no maximo 11 caracteres',
            'telefone.min' => 'Telefone deve conter no minimo 10 caracteres',
            'email.max' => 'Email deve conter no maximo 120 caracteres',
            'email.required' => 'Email obrigatorio',
            'email.unique'=> 'Email ja cadastrado no sistema',
            'email.email'=> 'Formato invalido',
            'endereco.required' =>' Endereço obrigatorio',
            'endereco.max' => 'Endereço deve conter no maximo 120 caracteres',
            'senha.required' =>'Senha obrigatorio',
         
           
    
        ];
    }
}
