<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
        protected $fillable = ['id_petugas', 'nisn', 'tgl_bayar', 'bulan_dibayar', 'tahun_dibayar', 'id_spp', 'jumlah_bayar'];

}
