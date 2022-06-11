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
        Schema::create('tab_consult', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_parent')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_dokter')->references('id')->on('users')->onDelete('cascade');
            $table->text('message_consult');
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
