<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateAppointmentScheduleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('appointmentschedule',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone_number")->nullable();
            $table->dateTime("day_time")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appointmentschedule');
    }

}