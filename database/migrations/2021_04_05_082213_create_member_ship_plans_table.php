<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberShipPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_ship_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('price');
            $table->string('promo_price');
            $table->text('description');
            $table->integer('type');
            $table->integer('duration');
            $table->integer('usage');
            $table->integer('status');
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
        Schema::dropIfExists('member_ship_plans');
    }
}
