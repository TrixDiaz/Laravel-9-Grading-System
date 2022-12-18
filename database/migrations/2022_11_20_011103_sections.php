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
        Schema::create('sections', function (Blueprint $table){
            
            $table->id();
            $table->string('student_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('age');
            $table->string('gender');
            $table->string('email');
            $table->string('contact_no');
            $table->string('class_sec');
            $table->string('class_subj');
            $table->string('first_grade')->nullable();
            $table->string('second_grade')->nullable();
            $table->string('third_grade')->nullable();
            $table->string('fourth_grade')->nullable();
            $table->string('final')->nullable();
            $table->string('WH1')->nullable();
            $table->string('WH2')->nullable();
            $table->string('WH3')->nullable();
            $table->string('WH4')->nullable();
            $table->string('WH5')->nullable();
            $table->string('WH6')->nullable();
            $table->string('WH7')->nullable();
            // $table->string('WH8')->nullable();
            // $table->string('WH9')->nullable();
            // $table->string('WH10')->nullable();
            $table->string('WHTOTAL')->nullable();
            $table->string('WHPGPS')->nullable();
            $table->string('WHPGWS')->nullable();
            $table->string('WS1')->nullable();
            $table->string('WS2')->nullable();
            $table->string('WS3')->nullable();
            $table->string('WS4')->nullable();
            $table->string('WS5')->nullable();
            $table->string('WS6')->nullable();
            $table->string('WS7')->nullable();
            // $table->string('WS8')->nullable();
            // $table->string('WS9')->nullable();
            // $table->string('WS10')->nullable();
            $table->string('WSTOTAL')->nullable();
            $table->string('WSCPS')->nullable();
            $table->string('WSCWS')->nullable();
            $table->string('PH1')->nullable();
            $table->string('PH2')->nullable();
            $table->string('PH3')->nullable();
            $table->string('PH4')->nullable();
            $table->string('PH5')->nullable();
            $table->string('PH6')->nullable();
            // $table->string('PH7')->nullable();
            // $table->string('PH8')->nullable();
            // $table->string('PH9')->nullable();
            // $table->string('PH10')->nullable();
            $table->string('PHTOTAL')->nullable();
            $table->string('PHPGPS')->nullable();
            $table->string('PHPGWS')->nullable();
            $table->string('PS1')->nullable();
            $table->string('PS2')->nullable();
            $table->string('PS3')->nullable();
            $table->string('PS4')->nullable();
            $table->string('PS5')->nullable();
            $table->string('PS6')->nullable();
            // $table->string('PS7')->nullable();
            // $table->string('PS8')->nullable();
            // $table->string('PS9')->nullable();
            // $table->string('PS10')->nullable();
            $table->string('PSTOTAL')->nullable();
            $table->string('PPSCPS')->nullable();
            $table->string('PPSCWS')->nullable();
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
       Schema::dropIfExists('sections');
    }
};
