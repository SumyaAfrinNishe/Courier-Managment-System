<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerinfos', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('sender_email');
            $table->integer('sender_contact');
            $table->string('recepient_name');
            $table->string('recepient_email');
            $table->integer('recepient_phone');
            $table->string('branch_name');
            $table->string('type_of_shipment');
            $table->string('courier_description');
            $table->integer('quantity');
            $table->integer('weight');
            $table->string('image');
            $table->string('customer_decision')->default('Pending');
            $table->string('status')->default('Pending');
            $table->integer('price')->nullable();
            $table->date('pickup_date')->nullable();
            $table->time('pickup_time')->nullable();
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
        // Schema::dropIfExists('customerinfos');
    }
}
