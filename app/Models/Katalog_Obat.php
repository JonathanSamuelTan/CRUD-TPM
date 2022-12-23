<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog_Obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kegunaan_id',
        'pbf',
        'stok',
        'harga',
        'image'
    ];

    public function kegunaan()
    {
        return $this->belongsTo(kegunaan::class);
    }
}
