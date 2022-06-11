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
        Schema::create('tab_replies', function (Blueprint $table) {
            $table->id('id');
            $table->text('isi_replies');
            $table->integer('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_forum')->references('id')->on('tab_forum')->onDelete('cascade');
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
        //
    }
};
