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
        Schema::create('tab_parents', function (Blueprint $table) {
            $table->id('id_parent');
            $table->string('user_parent');
            $table->string('psw_parent');
            $table->string('email_parent')->unique();
            $table->string('nama_parent');
            $table->string('profpic_parent');
            $table->integer('id_balita');
            $table->integer('id_forum');
            $table->integer('id_konsul');
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
