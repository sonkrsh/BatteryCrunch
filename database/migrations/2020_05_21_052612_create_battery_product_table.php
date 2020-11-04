<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatteryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battery_product', function (Blueprint $table) {
            $table->id();
            $table->string('make_id');
            $table->string('model_id');
            $table->string('fuel_id');
            $table->string('batterCompany_id');
            $table->string('Product_name');
            $table->string('Product_descp');
            $table->string('Product_image');
            $table->decimal('Product_price');
            $table->decimal('Product_price_withExcahnge');
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
        Schema::dropIfExists('battery_product');
    }
}
