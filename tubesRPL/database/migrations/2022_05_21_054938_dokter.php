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
        Schema::create('tab_dokter', function (Blueprint $table) {
            $table->id('id_dokter');
            $table->string('user_dokter');
            $table->string('psw_dokter');
            $table->string('email_dokter')->unique();
            $table->string('nama_dokter');
            $table->text('profpic_dokter');
            $table->string('spesialis_dokter');
            $table->integer('id_rs');
            $table->integer('id_jadwal');
            $table->integer('id_artikel');
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
