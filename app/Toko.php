<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kriteria;

class Toko extends Model
{
    protected $table = 'toko';

    // relasi dengan model kriteria
    public function kriteria()
    {
        return $this->hasMany(Kriteria::class);
    }
}
