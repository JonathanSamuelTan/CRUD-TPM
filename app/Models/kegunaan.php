<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegunaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegunaan'
    ];

    public function obat()
    {
        return $this->hasMany(Katalog_Obat::class);
    }
}
