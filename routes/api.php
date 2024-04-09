<?php

use App\Http\Controllers\CadastroClienteController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produto', [ProdutoController:: class, 'index']);

Route::post('/clientes', [CadastroClienteController::class, 'store']);
