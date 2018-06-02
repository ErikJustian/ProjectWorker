<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTakenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table ini berisi job yang employee nya sudah ada 
        Schema::create('job_taken', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id');
            $table->integer('employee');
            $table->string('complain');
            $table->integer('rating');
            $table->string('status');
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
        Schema::dropIfExists('job_taken');
    }
}
