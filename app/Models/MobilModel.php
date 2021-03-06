<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MobilModel extends Eloquent
{
    protected $connection;
    protected $collection = 'Mobil';
    protected $fillable = [
        'tahun_keluaran','warna','harga','mesin','kapasitas','tipe','stok','deleted'
    ];
    use HasFactory;
}
