<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualans';
    protected $primaryKey = 'id_penjualan';

    protected $fillable = [
        'id_penjualan',
        'id_produk',
        'sold',
        'tgl_sold'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class,'id_produk','id_produk');
    }
}

