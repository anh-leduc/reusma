<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            #create attribute
            $table->string('id',10)->primary();
            $table->string('username',30);
            $table->string('password',255);
            $table->string('remember_token',100)->nullable();
            $table->string('name',50);
            $table->string('status',50);
            $table->string('gender',10)->nullable();
            $table->integer('id_level')->unsigned();
            $table->foreign('id_level')->references('id')->on('level');
            $table->integer('privillege');
            $table->date('join_date');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
