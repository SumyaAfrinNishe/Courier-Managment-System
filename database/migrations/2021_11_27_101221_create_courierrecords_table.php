<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courierrecords', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('recepient_name');
            $table->integer('consignment_no');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->string('image');
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
        Schema::dropIfExists('courierrecords');
    }
}
