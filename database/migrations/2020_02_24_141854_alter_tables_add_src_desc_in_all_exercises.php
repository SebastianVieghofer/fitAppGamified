<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablesAddSrcDescInAllExercises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pushes', function (Blueprint $table) {
            $table->string('src');
            $table->string('description');
        });

        Schema::table('pulls', function (Blueprint $table) {
            $table->string('src');
            $table->string('description');
        });

        Schema::table('legs', function (Blueprint $table) {
            $table->string('src');
            $table->string('description');
        });

        Schema::table('back_cores', function (Blueprint $table) {
            $table->string('src');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pushes', function (Blueprint $table) {
            //
        });

        Schema::table('pulls', function (Blueprint $table) {
            //
        });

        Schema::table('legs', function (Blueprint $table) {
            //
        });

        Schema::table('back_cores', function (Blueprint $table) {
            //
        });
    }
}
