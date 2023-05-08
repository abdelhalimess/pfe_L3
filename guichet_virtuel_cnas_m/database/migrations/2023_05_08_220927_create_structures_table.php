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
        Schema::create('structures', function (Blueprint $table) {
            $table->increments('id');
		    $table->string('name', 191)->nullable();
		    $table->unsignedInteger('structure_type_id')->nullable();
		    $table->string('state', 3)->nullable();
		
		    $table->foreign('structure_type_id')
                ->references('id')->on('structure_types')
                ->onDelete('set null');
		
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
        Schema::dropIfExists('structures');
    }
};
