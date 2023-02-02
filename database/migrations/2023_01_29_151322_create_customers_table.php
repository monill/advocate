<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_type_id');
            $table->foreignId('gender_id')->nullable();
            $table->foreignId('marital_status_id')->nullable();
            $table->foreignId('issuing_institution_id')->nullable();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('rg', 14)->nullable();
            $table->string('cpf', 20)->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('photo')->nullable();
            $table->string('email')->nullable();
            $table->string('fantasy_name')->nullable(); // Nome Fantasia
            $table->string('cnpj', 20)->nullable();
            $table->string('state_registration')->nullable(); // Inscrição Estadual
            $table->string('municipal_registration')->nullable(); // Inscrição Municipal
            $table->text('comments')->nullable();
            $table->boolean('birthday_email')->default(0);
            $table->boolean('contrary_parts')->default(0);
            $table->date('birthday')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('client_type_id')->references('id')->on('type_customers');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('marital_status_id')->references('id')->on('marital_status');
            $table->foreign('issuing_institution_id')->references('id')->on('issuing_institutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
