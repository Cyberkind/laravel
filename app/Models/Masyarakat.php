<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    //set tabel
    protected $table ="masyarakat";
    //set primkey
    protected $primaryKey="nik";
    //set auto increment
    public $incrementing = false;
    //set tipe data primkey
    
    protected $keyType = 'string';

    //setting kolom yang dapat diisi secara massal
    protected $guarded = [];
}
