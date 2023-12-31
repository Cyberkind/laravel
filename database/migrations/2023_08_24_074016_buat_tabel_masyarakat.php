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
        Schema::create('masyarakat',function(Blueprint $tabel){
            $tabel->char('nik',16);
            $tabel->string('Nama',35);
            $tabel->string('Username',25);
            $tabel->string('Password',32);
            $tabel->string('telp',13);
            $tabel->timestamps();
            $tabel->primary('nik');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('masyarakat');
    }
};
