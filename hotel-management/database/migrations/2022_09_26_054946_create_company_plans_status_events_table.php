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
        Schema::create('company_plans_status_events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_plan_id');
            $table->foreign('company_plan_id')->references('id')->on('company_plans');
            $table->unsignedBigInteger('company_plan_status_catalog_id');
            $table->foreign('company_plan_status_catalog_id')->references('id')->on('company_plan_status_catalogs');
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
        Schema::dropIfExists('company_plans_status_events');
    }
};
