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
        Schema::create('income_parcels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('income_id')->index();
            $table->unsignedBigInteger('payment_method_id')->index();
            $table->string('document')->nullable();
            $table->date('due_date');
            $table->decimal('amount', 2);
            $table->decimal('amount_paid', 2)->nullable();
            $table->boolean('is_paid')->default(0);
            $table->timestamp('payment_in')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('income_id')->references('id')->on('incomes');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_parcels');
    }
};
