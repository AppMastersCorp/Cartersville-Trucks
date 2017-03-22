<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateCreditApplicationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('creditapplication',function(Blueprint $table){
            $table->increments("id");
            $table->string("fullname");
            $table->string("dob")->nullable();
            $table->string("ssn")->nullable();
            $table->string("ofdependents")->nullable();
            $table->text("streetaddress")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("zipcode")->nullable();
            $table->string("howlong")->nullable();
            $table->string("homephone")->nullable();
            $table->string("cellphone")->nullable();
            $table->string("residentialstatus")->nullable();
            $table->string("monthly_rent_mortage_pmt")->nullable();
            $table->string("landlord_or_mortage_holders_name")->nullable();
            $table->string("previous_address")->nullable();
            $table->string("current_employee_name")->nullable();
            $table->string("current_employee_address")->nullable();
            $table->string("gross_monthly_salary")->nullable();
            $table->string("work_phone")->nullable();
            $table->string("occupational_title")->nullable();
            $table->string("how_lone")->nullable();
            $table->string("previously_employer")->nullable();
            $table->string("residential_status")->nullable();
            $table->string("gross_monthly_other_income")->nullable();
            $table->string("other_income_source")->nullable();
            $table->string("reference1")->nullable();
            $table->string("phone")->nullable();
            $table->string("reference2")->nullable();
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
        Schema::drop('creditapplication');
    }

}