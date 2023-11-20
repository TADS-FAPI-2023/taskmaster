<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->foreignId('project_id')->constrained();
            $table->text('description');
            $table->tinyInteger('finished')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->dateTime('time_limit');
            $table->string('difficulty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
