<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeserta extends Model
{
    use HasFactory;

    protected $fillable = ['ktp', 'nama_lengkap_peserta', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
    'agama', 'status', 'pekerjaan', 'hobi', 'keahlian', 'bahasa', 'pendaftaran_id'];

    protected $table = 'data_peserta';

    public $timestamps = false;

    public function asuransi()
    {
        return $this->belongsTo(Asuransi::class, 'data_peserta_id', 'id');
    }

    public function pendaftaran(){
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran', 'id');
    }
}