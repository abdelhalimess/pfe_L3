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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('structure_id')->nullable();
            $table->foreign('structure_id')
                ->references('id')
                ->on('structures')
                ->onDelete('set null');
                $table->dropForeign('commune_id');
                $table->dropColumn('commune_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropColumn('commune_id');
        });
    }
};
