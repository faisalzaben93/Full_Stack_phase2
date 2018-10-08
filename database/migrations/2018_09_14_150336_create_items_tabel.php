<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTabel extends Migration
{
    /**a
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_name');
            $table->text('item_description');
            $table->float('item_price');
            $table->string('item_country');
            $table->integer('category_id_fk')->unsigned();
            $table->foreign('category_id_fk')->references('category_id')->on('categories');
            $table->string('item_image')->default('storage/public/defaultUser.png');
            $table->integer('user_id_fk')->unsigned();
            $table->foreign('user_id_fk')->references('id')->on('users');
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
        Schema::dropIfExists('items');
    }
}