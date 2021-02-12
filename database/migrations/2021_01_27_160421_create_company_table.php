<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'company';
        Schema::create($tableName, function (Blueprint $table) {
            $table->string("CIF")->primary();
            $table->string("name");
            $table->string("address");
            $table->string("town");
            $table->string("phone_number_1");
            $table->string("phone_number_2")->nullable();
            $table->string("email")->nullable();
            $table->string("production_sector");
            $table->text("main_activity");
            $table->string("ownership");
            $table->string("representant_NIF");
            $table->timestamps();
        });

        //Add production sector constraint check
        DB::statement("ALTER TABLE " . $tableName . " ADD CONSTRAINT chk_production_sector CHECK (production_sector = 'primary' OR production_sector = 'secondary' OR production_sector = 'tertiary');");
        DB::statement("ALTER TABLE " . $tableName . " ADD CONSTRAINT ownership CHECK (ownership = 'public' OR ownership = 'private');");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
