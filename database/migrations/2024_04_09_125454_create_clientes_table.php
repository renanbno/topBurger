<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 120)->nullable(false);
            $table->string('email', 120)->nullable(false);
            $table->string('senha')->nullable(false);
            $table->string('telefone', 11)->nullable(false);
            $table->string('cpf', 11)->nullable(false);
            $table->string('endereco', 100)->nullable(false);
            $table->string('imagem')->nullable(false);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
