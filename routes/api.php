<?php

use App\Http\Controllers\CadastroClienteController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/produto', [ProdutoController:: class, 'store']);
Route::get('produtoIndex',[ProdutoController::class,'index']);

Route::post('CadastrarCliente', [CadastroClienteController::class, 'store']);

// Route::get('CadastrarClienteIndex',[CadastroClienteController::class,'index']);
