<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;
    protected $tabel ="pengaduan";
    protected $primaryKey ="id_pengaduan";
    public $incrementing = false;
    protected $guarded = [];
}
