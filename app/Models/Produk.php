<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'produk_id',
        'jumlah',
        'total_harga',
        'status',
        'ekspedisi',
        'nomor_resi',
        'alamat_pengiriman',
         'nomor_telepon',
        'catatan',
        'tanggal_pesanan',
        'tanggal_selesai',
        'is_read',
    ];

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class);
    }
}
