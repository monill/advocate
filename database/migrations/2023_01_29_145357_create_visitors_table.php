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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip', 70);
            $table->string('country', 45)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('estate', 100)->nullable();
            $table->string('browser', 100)->nullable();
            $table->string('system', 100)->nullable();
            $table->string('device', 100)->nullable();
            $table->boolean('is_mobile')->default(0);
            $table->boolean('is_tablet')->default(0);
            $table->boolean('is_desktop')->default(0);
            $table->boolean('is_bot')->default(0);
            $table->text('referrer')->nullable();
            $table->string('load_time', 45)->nullable();
            $table->unsignedSmallInteger('num_access')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
};
