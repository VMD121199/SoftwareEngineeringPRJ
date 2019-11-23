<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('idClient');
            $table->string('nameClient')->nullable();
            $table->string('addressClient')->nullable();
            $table->string('phoneClient')->nullable();
            $table->string('emailClient')->unique();
            $table->string('usernameClient')->unique();
            $table->string('passwordClient');
            $table->integer('idRole')->nullable();
            $table->string('client_token');
            $table->datetime('client_tokenexpirytime')->unique();
            $table->datetime('client_created')->unique();
            $table->datetime('client_updated')->unique();
            $table->integer('client_status')->unique();
            $table->integer('language_id');
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
        Schema::dropIfExists('clients');
    }
}
