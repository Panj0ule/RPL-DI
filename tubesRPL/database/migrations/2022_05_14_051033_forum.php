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
        Schema::create('tab_forum', function (Blueprint $table) {
            $table->id('id');
            $table->string('judul_forum');
            $table->text('isi_forum');
            $table->integer('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_replies')->references('id')->on('tab_replies')->onDelete('cascade');
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
        Schema::dropIfExists('forums');
    }
};
