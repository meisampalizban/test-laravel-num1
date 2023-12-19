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
        Schema::create('table_1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_plan',255);
            
        });
        Schema::create('table_2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->integer('price');
            $table->integer('plan_id');
        });
        Schema::create('table_3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_order');
            $table->integer('plan_id');  
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_1');
        Schema::dropIfExists('table_2');
        Schema::dropIfExists('table_3');
    }
};
