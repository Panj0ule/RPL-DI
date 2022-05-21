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
        Schema::create('tab_balita', function (Blueprint $table) {
            $table->id('id_balita');
            $table->string('nama_balita');
            $table->integer('umur_balita');
            $table->integer('berat_balita');
            $table->integer('tinggi_balita');
            $table->string('jenis_kelamin');
            $table->integer('id_parent');
            $table->integer('id_graph');
            $table->text('profpic_balita');
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
