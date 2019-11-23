<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('idProduct');
            $table->string('nameProduct')->unique();
            $table->text('imageProduct')->nullable();
            $table->string('productSale');
            $table->string('productHot');
            $table->datetime('daypublishproduct');
            $table->biginteger('idMenuChild')->unique();
            $table->string('nameMenuChild')->nullable();
            $table->softDeletes();
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
