<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('projectName');
            $table->string('user');
            $table->string('projectUrl');
            /*$table->integer('search_engine_id');*/
            $table->string('search_engine_name');
            $table->bigInteger('search_engine_id');
            $table->string('search_engine_language');
            // $table->integer('location_id');
            $table->string('location_name');
            $table->bigInteger('location_id');
            $table->bigInteger('task')->default('0');
            $table->string('frequency');
            $table->string('keyword')->default(' ');
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
        Schema::dropIfExists('projects');
    }
}
