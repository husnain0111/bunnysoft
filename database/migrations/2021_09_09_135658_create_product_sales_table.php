<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('buyer_name')->nullable();
            $table->string('buyer_address');
            $table->string('buyer_city');
            $table->string('buyer_district');
            $table->bigInteger('buyer_phone');
            $table->string('crop')->nullable();
            $table->string('crop_variety')->nullable();
            $table->integer('crop_total_unite')->nullable();
            $table->integer('price')->nullable();
            $table->integer('total_price')->nullable();
            $table->unsignedBigInteger('sale_person_id');
            $table->timestamps();
            
            $table->index('sale_person_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_sales');
    }
}
