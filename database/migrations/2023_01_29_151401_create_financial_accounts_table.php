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
        Schema::create('financial_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id')->index();
            $table->string('name');
            $table->string('agency', 45)->nullable();
            $table->string('account_number', 45)->nullable();
            $table->decimal('initial_balance')->default(0.00);
            $table->text('observation')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_accounts');
    }
};
