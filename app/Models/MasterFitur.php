<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterFitur extends Model
{
    use HasFactory;

    protected $table = "master_fitur";
    protected $fillable = [
        'nama_fitur',
        'harga',
        'deskripsi',
        'alias',
        'updated_at',
    ];
    public $timestamps = false;
}
