<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->double('price');
            $table->integer('filter_id');
            $table->foreign('filter_id')->references('id')->on('filter');
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
        Schema::create('gift', function (Blueprint $table) {
            $table->dropForeign('gift_filter_id_foreign');
            $table->dropColumn('filter_id');
        });

        Schema::dropIfExists('gift');
    }
}
