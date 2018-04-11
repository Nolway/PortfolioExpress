<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTagGetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tag_get', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('project')->unsigned();
            $table->integer('tag')->unsigned();
        });

        Schema::table('project_tag_get', function (Blueprint $table) {
            $table->foreign('project')->references('id')->on('project');
            $table->foreign('tag')->references('id')->on('project_tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_tag_get');
    }
}
