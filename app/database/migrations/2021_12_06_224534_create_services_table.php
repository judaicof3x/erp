<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(1); // Se está 1: disponivel para vendas avulsas

            $table->string('name'); // Nome do serviço
            $table->string('url')->unique();
            $table->unsignedBigInteger('category_id'); // Referencia da categoria
            $table->text('description')->nullable(); // Referencia da categoria
            $table->string('amount')->nullable(); // Valor do serviço
            $table->string('amount_min')->nullable(); // Valor minimo de negociação
            $table->string('deadline_deal')->nullable(); // Prazo de entrega negociado
            $table->string('deadline_real')->nullable(); // Prazo de entrega real

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
