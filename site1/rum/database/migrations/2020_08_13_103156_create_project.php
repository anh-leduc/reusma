<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->string('id',10)->primary();
            $table->string('name',50);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status',10)->default('ACTIVE');
            $table->float('total_effort');
            $table->float('real_cost');
            $table->integer('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->on('client');
            $table->string('id_pm',10);
            $table->foreign('id_pm')->references('id')->on('users');
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
        Schema::dropIfExists('project');
    }
}
