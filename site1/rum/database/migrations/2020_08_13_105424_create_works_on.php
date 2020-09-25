<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksOn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works_on', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_dev',10);
            $table->foreign('id_dev')->references('id')->on('users');
            $table->string('type',5);
            $table->string('id_project',10);
            $table->foreign('id_project',10)->references('id')->on('project');

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
        Schema::dropIfExists('works_on');
    }
}
