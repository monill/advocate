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
        Schema::create('phone_laywers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lawyer_id')->index();
            $table->unsignedBigInteger('phone_type_id')->index();
            $table->string('number', 25);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('lawyer_id')->references('id')->on('lawyers');
            $table->foreign('phone_type_id')->references('id')->on('type_phones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_laywers');
    }
};
