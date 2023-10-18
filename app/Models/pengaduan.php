<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    public $timstamps = false;
    protected $table = "pengaduan";

    protected $fillable  = ['id_pengaduan','tanggal_pengaduan', 'nik', 'isi_laporan','foto', 'status'];
}