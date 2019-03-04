<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('PR_id');
            $table->integer('PR_CA_id');
            // $table->foreign('PR_CA_id')->references('CA_id')->on('Category')->onDelete('cascade');
            $table->string('PR_name');
            $table->string('PR_alias');
            $table->longText('PR_content');
            $table->integer('PR_price');
            $table->integer('PR_quantity');
            $table->string('PR_SKU', 20);
            $table->string('PR_avatar');
            $table->text('PR_sortDesc');
            $table->integer('PR_sale');
            $table->integer('PR_view');
            $table->integer('PR_numberBuy');
            $table->string('PR_producer', 50);
            $table->tinyInteger('PR_status');
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
        Schema::dropIfExists('Product');
    }
}
