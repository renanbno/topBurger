<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class CadastroClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        $ClientesComImagem = $clientes->map(function($clientes){
            return [
                'nome' => $clientes->nome,
                'email' => $clientes->email,
                'senha' => $clientes-> senha,
                'telefone' => $clientes-> telefone,
                'cpf' => $clientes-> cpf,
                'endereco' => $clientes-> endereco,
                'imagem' => asset('store/' . $clientes->image),
            ];
        });

        return response()->json($ClientesComImagem);
    }

    public function store (Request $request){

        $ClienteData = $request->all();

        if ($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem = $imagem->storeAs('imagens/clientes', $nomeImagem, 'public');
            $produtoData[ 'imagem' ] = $caminhoImagem;

        }

        $produto = Cliente::create($ClienteData);
        return response()->json(['clientes'=>$produto], 201);
    }
}
