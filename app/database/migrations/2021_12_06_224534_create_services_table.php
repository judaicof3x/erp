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
            $table->double('amount', 10, 2)->nullable(); // Valor do serviço
            $table->double('amount_min', 10, 2)->nullable(); // Valor minimo de negociação
            $table->date('deadline_deal')->nullable(); // Prazo de entrega negociado
            $table->date('deadline_real')->nullable(); // Prazo de entrega real

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
