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
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('ip', 70);
            $table->string('browser', 100)->nullable();
            $table->string('system', 100)->nullable();
            $table->string('device', 100)->nullable();
            $table->boolean('is_mobile')->default(0);
            $table->boolean('is_tablet')->default(0);
            $table->boolean('is_desktop')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logins');
    }
};
