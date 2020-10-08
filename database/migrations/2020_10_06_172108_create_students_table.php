<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigInteger('enrolment_id')->unsigned();
            $table->string('name');
            $table->integer('roll_no',3)->unsigned();
            $table->date('dob');
            $table->boolean('sex');
            $table->string('email');
            $table->longText('password');
            $table->integer('phone_no',10)->unsigned();
            $table->decimal('ssc',3,2)->unsigned();
            $table->decimal('hsc',3,2)->unsigned();
            $table->decimal('ug',3,2)->unsigned();
            $table->string('ug_stream');
            $table->intger('pg_current_cgpa',3)->unsigned();
            $table->intger('opt_out_id')->nullable()->default(null);
            $table->boolean('is_placed')->default(FALSE);
            $table->timestamps();
            $table->intger('placement_drive_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
