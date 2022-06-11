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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name');
            // $table->string('username');
            // $table->string('phonenumb');
            $table->string('password');
            // $table->string('alamat');
            // $table->string('koordinat');
            // $table->string('profpic');
            // $table->string('role');
            // $table->string('spesialis');
            // $table->integer('id_forum')->references('id')->on('tab_forum')->onDelete('cascade');
            // $table->integer('id_replies')->references('id')->on('tab_replies')->onDelete('cascade');
            // $table->integer('id_balita')->references('id')->on('tab_balita')->onDelete('cascade');
            // $table->integer('id_jadwal')->references('id')->on('tab_jadwal')->onDelete('cascade');
            // $table->integer('id_message')->references('id')->on('tab_message')->onDelete('cascade');
            // $table->integer('id_consult')->references('id')->on('tab_consult')->onDelete('cascade');
            // $table->integer('id_artikel')->references('id')->on('tab_artikel')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
