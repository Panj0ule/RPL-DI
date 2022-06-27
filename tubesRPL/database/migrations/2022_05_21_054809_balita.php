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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id('id_balita');
            $table->string('nama_balita');
            $table->date('tgl_lahir');
            $table->integer('umur_balita');
            $table->integer('berat_balita');
            $table->integer('tinggi_balita');
            $table->string('jenis_kelamin');
            $table->integer('id_user')->references('id')->on('users')->onDelete('cascade');
/*             $table->integer('id_graph')->references('id')->on('tab_graph')->onDelete('cascade');
            $table->text('profpic_balita'); */
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
