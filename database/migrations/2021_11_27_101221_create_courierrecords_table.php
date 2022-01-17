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
            $table->integer('sender_contact');
            $table->string('sender_address');
            $table->string('recepient_name');
            $table->integer('recepient_phone');
            $table->string('recepient_address');
            $table->string('name');
            $table->string('address');
            $table->integer('consignment_no')->unique();
            $table->string('type_of_shipment');
            $table->string('courier_description');
            $table->integer('quantity');
            $table->integer('weight');
            $table->integer('price');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->string('status');
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
