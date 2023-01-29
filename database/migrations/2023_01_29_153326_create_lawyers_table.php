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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('defender_type_id')->index();
            $table->unsignedBigInteger('address_type_id')->index();
            $table->unsignedBigInteger('state_id')->index();
            $table->unsignedBigInteger('city_id')->index();

            $table->string('name');
            $table->string('oab', 45)->nullable();
            $table->string('email')->nullable();
            $table->text('observations')->nullable();
            $table->string('photo')->nullable();
            $table->string('zip_code', 10);
            $table->string('street');
            $table->string('number', 10);
            $table->string('complement')->nullable();
            $table->string('neighborhood');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('defender_type_id')->references('id')->on('type_defenders');
            $table->foreign('address_type_id')->references('id')->on('type_address');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawyers');
    }
};
