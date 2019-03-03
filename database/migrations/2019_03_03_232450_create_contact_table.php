<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contact', function (Blueprint $table) {
            $table->increments('CT_id');
            $table->string('CT_number', 20);
            $table->string('CT_address', 50);
            $table->string('CT_linkFace');
            $table->string('CT_linkYoutu');
            $table->string('CT_linkGoogle');
            $table->string('CT_Email');
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
        Schema::dropIfExists('Contact');
    }
}
