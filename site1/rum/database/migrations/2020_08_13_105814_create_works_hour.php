<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksHour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works_hour', function (Blueprint $table) {
            $table->integer('id_works_on')->unsigned();
            $table->foreign('id_works_on')->references('id')->on('works_on');
            $table->date('week');
            $table->float('hour');
            $table->primary(array('week','id_works_on'));
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
        
        Schema::dropIfExists('works_hour');
    }
}
