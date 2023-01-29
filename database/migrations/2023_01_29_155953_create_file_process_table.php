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
        Schema::create('file_process', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('process_id')->index();
            $table->string('name')->nullable();
            $table->string('real_name')->nullable();
            $table->string('extension', 4);
            $table->unsignedBigInteger('size');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('process_id')->references('id')->on('processes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_process');
    }
};
