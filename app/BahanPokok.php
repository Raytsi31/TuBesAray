<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanPokok extends Model
{
    protected $fillable = ['nama', 'sumber', 'stok', 'harga'];
}
