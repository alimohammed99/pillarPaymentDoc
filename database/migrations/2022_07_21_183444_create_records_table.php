<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('date');
            $table->string('quarter');
            $table->string('starting_point');
            $table->string('end_point');
            $table->string('surcon_number');
            $table->string('name');
            $table->string('status');
            $table->string('no_of_pillars');
            $table->string('plan_number');
            $table->string('location');
            $table->string('lga');
            $table->string('amount');
            $table->string('type');
            $table->string('payment_mode');
            
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
        Schema::dropIfExists('records');
    }
}
