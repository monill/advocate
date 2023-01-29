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
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_type_id')->index();
            $table->unsignedBigInteger('action_type_id')->index();
            $table->unsignedBigInteger('situation_id')->index();
            $table->unsignedBigInteger('lawyer_id')->index();
            $table->unsignedBigInteger('procedural_condition_id')->index();
            $table->unsignedBigInteger('justice_type_id')->index();
            $table->unsignedBigInteger('state_id')->index();
            $table->unsignedBigInteger('city_id')->index();
            $table->unsignedBigInteger('judge_id')->index();
            $table->unsignedBigInteger('forum_id')->index();
            $table->unsignedBigInteger('court_id')->index();

            $table->string('number');
            $table->string('subject');
            $table->decimal('amount')->nullable();
            $table->string('internal_folder')->nullable();
            $table->date('registration_date')->nullable();
            $table->date('distribution_date')->nullable();
            $table->date('closing_date')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('case_type_id')->references('id')->on('type_process');
            $table->foreign('action_type_id')->references('id')->on('type_actions');
            $table->foreign('situation_id')->references('id')->on('situations');
            $table->foreign('lawyer_id')->references('id')->on('lawyers');
            $table->foreign('procedural_condition_id')->references('id')->on('procedural_conditions');
            $table->foreign('justice_type_id')->references('id')->on('type_justices');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('judge_id')->references('id')->on('judges');
            $table->foreign('forum_id')->references('id')->on('forums');
            $table->foreign('court_id')->references('id')->on('courts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes');
    }
};
