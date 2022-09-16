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
        Schema::create('mines', function (Blueprint $table) {
            $table->id();
            $table->decimal('mine_latitude',9,6);
            $table->decimal('mine_longitude',9,6);
            $table->string('mine_title',64);
            $table->unsignedBigInteger('helios_cap');
            $table->unsignedBigInteger('nation_id');
            $table->foreign('nation_id')->references('id')->on('nations');
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
        Schema::dropIfExists('mines');
    }
};
