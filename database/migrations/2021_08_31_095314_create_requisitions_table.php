<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->string('p_name');
            $table->string('p_age');
            $table->string('p_gender');
            $table->string('hospital');
            $table->string('doctor');
            $table->string('p_city');
            $table->string('p_disease');
            $table->string('p_bg');
            $table->string('unit');
            $table->string('r_form');
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
        Schema::dropIfExists('requisitions');
    }
}
