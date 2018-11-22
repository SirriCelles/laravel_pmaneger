<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description')->nullable();

            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('company_id')->unsigned()->nullable();                    
            $table->integer('days')->unsigned()->nullable();
            $table->integer('hours')->unsigned()->nullable();

            $table->foreign('project_id')->references('id')->on('project');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('task');
    }
}
