<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(1);

            // Dados do cliente
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('cell')->unique();
            $table->string('cpf')->unique();
            $table->string('rg')->unique()->nullable();
            $table->string('nationality')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('segment');
            $table->string('type'); // Se é pessoa fisica ou juridica


            // Dados da empresa
            $table->string('tenant_fantasy_name')->unique()->nullable();
            $table->string('tenant_cnpj')->unique()->nullable();
            $table->string('tenant_corporate_reason')->unique()->nullable();
            $table->string('tenant_email')->unique()->nullable();
            $table->string('tenant_phone')->unique()->nullable();
            $table->string('tenant_cell')->unique()->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
