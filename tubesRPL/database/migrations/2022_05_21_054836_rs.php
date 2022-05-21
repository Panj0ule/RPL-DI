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
        Schema::create('tab_rs', function (Blueprint $table) {
            $table->id('id_rs');
            $table->text('alamat_rs');
            $table->text('coordinate_rs');
            $table->integer('id_jadwal');
            $table->integer('id_dokter');
            $table->string('nama_rs');
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
