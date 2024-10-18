<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'bulan_pelaporan',
        'quarter',
        'tanggal_keadaan',
        'tanggal_ditemukan',
        'deskripsi_keadaan',
        'deskripsi_penyebab',
        'terkena_dampak',
        'kerugian_financial',
        'potensial_kerugian_financial',
        'status',
        'kerugian_non_financial',
    ];

    public $incrementing = false; // Karena kita menggunakan UUID
    protected $keyType = 'string'; // UUID adalah string
}
