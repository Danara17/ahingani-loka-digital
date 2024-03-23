<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    protected $fillable = [
        'nama_client',
        'email_client',
        'no_telp',
        'alamat',
        'nama_bisnis',
        'deskripsi_proyek' .
        'jenis_proyek',
        'ide_desain',
        'kebutuhan_fungsional',
        'target_utama',
        'tujuan_utama',
        'anggaran',
        'deadline',
        'referensi',
        'catatan',
    ];
}
