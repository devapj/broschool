<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_school', function (Blueprint $table) {


          $table->id();
            $table->String('s_name');
            $table->String('s_dob');
            $table->String('s_fname');
            $table->String('s_mname');
            $table->String('s_caste');
            $table->String('s_address');
            $table->String('s_phone');
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
        Schema::dropIfExists('_school');
    }
}
