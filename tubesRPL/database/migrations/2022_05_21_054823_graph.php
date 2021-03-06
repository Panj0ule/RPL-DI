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
        Schema::create('tab_graph', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_balita')->references('id')->on('tab_balita')->onDelete('cascade');
            $table->integer('berat_balita');
            $table->integer('tinggi_balita');
            $table->date('waktu');
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
