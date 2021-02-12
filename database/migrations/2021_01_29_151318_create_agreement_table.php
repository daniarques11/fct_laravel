<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAgreementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'agreement';
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger("working_center_id");
            $table->string("FCT_coordinator_NIF");
            $table->string("company_tutor_NIF");
            $table->string("day_work_type");
            $table->string("schedule");

            $table->timestamps();
        });

         //Add production sector constraint check
         DB::statement("ALTER TABLE " . $tableName . " ADD CONSTRAINT chk_day_work_type CHECK (day_work_type = 'full-time' OR day_work_type = 'part-time');");
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agreement');
    }
}
