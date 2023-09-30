<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('petugas',function(Blueprint $awokawok){
            $awokawok->integer('id_petugas');
            $awokawok->string('nama_petugas',35);
            $awokawok->string('username',25);
            $awokawok->string('password',32);
            $awokawok->string('tlp',13);
            $awokawok->enum('Level',['admin','petugas']);
            $awokawok->timestamps();
            $awokawok->primary('id_petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('petugas');
    }
};
