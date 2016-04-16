<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('attendance', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('emp_id');
            // $table->string('status_id');
            $table->time('time_in');
            $table->time('time_out');
            // $table->integer('mins_late');
            $table->integer('hrs_rendered');
            // $table->text('under_time');
            $table->string('date');
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
        //
        Schema::drop('attendance');
    }
}
