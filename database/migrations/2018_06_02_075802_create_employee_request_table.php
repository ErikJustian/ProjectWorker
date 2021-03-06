<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table ini berisi request employee terhadap suatu job
        Schema::create('employee_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id');
            $table->string('employee');
            $table->string('status');
            $table->string('refferal_id')->nullable();
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
        Schema::dropIfExists('employee_requests');
    }
}
