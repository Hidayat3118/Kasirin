<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded = ['id'];
    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'produk_transaksi')->withPivot("qty", 'subtotal')->withTimestamps();
    }
}
