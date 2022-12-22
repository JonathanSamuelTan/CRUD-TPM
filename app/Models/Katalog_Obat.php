<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog_Obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'pbf',
        'stok',
        'harga',
        'image'
    ];
}
