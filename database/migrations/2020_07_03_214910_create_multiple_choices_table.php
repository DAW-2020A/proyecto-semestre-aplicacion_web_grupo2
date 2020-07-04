<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultipleChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multiple_choices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CorrectAnswer');
            $table->string('Option1');
            $table->string('Option2');
            $table->string('Option3');
            $table->string('Option4');
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
        Schema::dropIfExists('multiple_choices');
    }
}
