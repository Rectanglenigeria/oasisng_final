<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('country');
            $table->string('phone');
            $table->string('completed_at');
            $table->string('victim_info');
            $table->string('price_range');
            $table->string('payment_method');
            $table->string('is_payment_ready');
            $table->integer('has_viewed');
            $table->integer('has_completed');
            $table->rememberToken();
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
        Schema::dropIfExists('hires');
    }
}
