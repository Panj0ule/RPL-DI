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
        Schema::create('tab_message', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_consult')->references('id')->on('tab_consult')->onDelete('cascade');
            $table->integer('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('waktu');
            $table->text('isi_message');
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
