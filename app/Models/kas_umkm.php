<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kas_umkm extends Model
{
    protected $table='kas_umkm';

    protected $fillable = [
        'name',
        'email',
        'jumlah_pembayaran',
        'metode_pembayaran',
        'status'
    ];
}