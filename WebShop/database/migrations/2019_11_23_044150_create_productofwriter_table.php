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
            $table->decimal('price',5,2);
            $table->string('addressCity')->nullable();
            $table->text('imageProductofwriter');
            $table->longtext('description');
            $table->mediumtext('title');
            $table->biginteger('idClient');
            $table->string('nameClient')->nullable();
            $table->string('usernameClient');
            $table->biginteger('idProduct');
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
