<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table ini berisi request job yang telah di post oleh employer
        Schema::create('job_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer');
            $table->string('title');
            $table->string('detail');
            $table->integer('salary');
            $table->string('requirement');
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
        Schema::dropIfExists('job_request');
    }
}
