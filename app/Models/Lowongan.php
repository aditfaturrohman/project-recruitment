<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'perusahaan',
        'jenis_pekerjaan',
        'tanggal_mulai',
        'tanggal_berakhir',
        'deskripsi',
    ];

    public function lamarans()
    {
        return $this->hasMany(\App\Models\Lamaran::class);
    }
}
