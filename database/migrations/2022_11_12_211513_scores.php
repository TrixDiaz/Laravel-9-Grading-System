<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            
            $table->id();
            $table->integer('writtenTask-1');
            $table->integer('writtenTask-2');
            $table->integer('writtenTask-3');
            $table->integer('writtenTask-4');
            $table->integer('writtenTask-5');
            $table->integer('writtenTask-6');
            $table->integer('writtenTask-7');
            $table->integer('writtenTask-8');
            $table->integer('writtenTask-9');
            $table->integer('writtenTask-10');
            $table->integer('performanceTask-1');
            $table->integer('performanceTask-2');
            $table->integer('performanceTask-3');
            $table->integer('performanceTask-4');
            $table->integer('performanceTask-5');
            $table->integer('performanceTask-6');
            $table->integer('performanceTask-7');
            $table->integer('performanceTask-8');
            $table->integer('performanceTask-9');
            $table->integer('performanceTask-10');
            $table->integer('exams');
            $table->integer('initialGrade');
            $table->integer('QuarterlyGrade');
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
        Schema::dropIfExists('scores');
    }
};
