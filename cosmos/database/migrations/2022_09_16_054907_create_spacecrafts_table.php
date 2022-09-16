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
        Schema::create('spacecrafts', function (Blueprint $table) {
            $table->id();
            $table->string('craft_title',64);
            $table->unsignedBigInteger('nation_id');
            $table->foreign('nation_id')->references('id')->on('nations');
            $table->string('img',200);
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
        Schema::dropIfExists('spacecrafts');
    }
};
