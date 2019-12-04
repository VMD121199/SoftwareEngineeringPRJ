<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductofwriterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productofwriter', function (Blueprint $table) {
            $table->bigIncrements('idProductofwriter');
            $table->string('nameProductofwriter')->nullable();
            $table->datetime('daypublic');
            $table->double('price');
            $table->integer('idCity');
            $table->string('imageProductofwriter',100);
            $table->longtext('description');
            $table->mediumtext('title');
            $table->integer('idClient');
            $table->string('nameClient')->nullable();
            $table->string('usernameClient');
            $table->integer('idProduct');
            $table->string('nameProduct')->nullable();
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
        Schema::dropIfExists('productofwriter');
    }
}
