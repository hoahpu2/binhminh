<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Category', function (Blueprint $table) {
            $table->increments('CA_id');
            $table->tinyInteger('CA_parentId');
            // $table->foreign('CA_parentId')->references('CA_id')->on('Category')->onDelete('cascade');
            $table->string('CA_name');
            $table->string('CA_alias');
            $table->tinyInteger('CA_status');
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
        Schema::dropIfExists('Category');
    }
}
