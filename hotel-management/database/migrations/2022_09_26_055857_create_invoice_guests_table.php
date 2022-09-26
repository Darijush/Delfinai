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
        Schema::create('invoice_guests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest_id');
            $table->foreign('guest_id')->references('id')->on('guests');
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('reservation_id')->references('id')->on('reservations');
            $table->unsignedDecimal('invoice_amount', 10, 2);
            $table->dateTime('ts_issued');
            $table->dateTime('ts_paid')->nullable();
            $table->dateTime('ts_canceled')->nullable();
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
        Schema::dropIfExists('invoice_guests');
    }
};
