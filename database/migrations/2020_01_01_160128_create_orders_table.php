<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('category');
            $table->string('product_name');
            $table->integer('quantity');
            $table->decimal('product_price');
            $table->decimal('weight_charge');
            $table->decimal('delivery_charge');
            $table->decimal('product_cost');
            $table->decimal('weight_cost');
            $table->decimal('advance_pay');
            $table->decimal('cod_credit');
            $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('orders');
    }
}
