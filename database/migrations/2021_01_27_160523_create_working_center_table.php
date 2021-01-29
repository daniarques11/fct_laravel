<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_center', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("company_CIF");
            $table->string("address");
            $table->string("town");
            $table->string("phone_number_1");
            $table->string("phone_number_2")->nullable();
            $table->string("email")->nullable();
            $table->integer("workers_number");
            $table->foreign('company_CIF')->references('CIF')->on('company');
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
        Schema::dropIfExists('working_center');
    }
}
