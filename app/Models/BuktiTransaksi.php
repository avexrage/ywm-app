<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiTransaksi extends Model
{
    use HasFactory;

    protected $table = 'bukti_transaksi';
    public $timestamps = false;
    protected $fillable = [
        'nama_file',
        'tanggal_upload',
        'transaksi_id'
    ];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
}
