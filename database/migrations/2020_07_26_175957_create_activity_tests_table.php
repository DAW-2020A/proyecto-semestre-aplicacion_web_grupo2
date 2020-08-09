<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        //Relacion Muchos a muchos entre Students y ActivityTests
        Schema::create('activity_test_students', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_test_id');
            $table->foreign('activity_test_id')->references('id')->on('activity_tests')->onDelete('restrict');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('grade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('activity_test_students');
        Schema::dropIfExists('activity_tests');
        Schema::enableForeignKeyConstraints();
    }
}
