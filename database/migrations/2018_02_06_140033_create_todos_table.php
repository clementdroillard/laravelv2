<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->boolean('isDone')->default(false);
            $table->timestamps();
        });
    }
    
 
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
