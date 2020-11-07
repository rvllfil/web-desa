<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang', 'harga', 'deskripsi', 'gambar'];

    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail', 'barang_id', 'id');
    }
}
