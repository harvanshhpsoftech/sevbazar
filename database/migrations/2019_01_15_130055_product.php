<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('vender_id');
            $table->integer('product_catgory');
            $table->string('Brand_name');
            $table->string('product_ingredients');
            $table->integer('Regions');
            $table->string('product_title');
            $table->string('product_weight');
            $table->string('product_price');
            $table->text('product_about');
            $table->string('Shelf_Life');
            $table->string('product_type');
            $table->string('Organic');
            $table->string('Gluten');
            $table->string('Peanut');
            $table->string('Lactose');
            $table->string('Licence');
            $table->string('Temperature');
            $table->string('Nutritional');
            $table->string('main_img');
            $table->string('optional_img');
            $table->string('product_date');
            $table->string('product_month');
            $table->string('product_year');
            $table->integer('product_status');
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
        Schema::dropIfExists('products');
    }
}
