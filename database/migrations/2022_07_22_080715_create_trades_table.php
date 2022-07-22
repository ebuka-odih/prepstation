<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('symbol');
            $table->integer('type');
            $table->double('amount');
            $table->string('sl')->nullable();
            $table->string('tp')->nullable();
            $table->string('leverage')->nullable();
            $table->string('open_rate')->nullable();
            $table->string('close_rate')->nullable();
            $table->integer('status')->nullable();
            $table->double('profit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
