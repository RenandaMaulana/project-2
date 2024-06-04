<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaEvent extends Model
{
    protected $table='kelolaevent';

    protected $fillable = [
        'name',
        'email',
        'event',
        'phone',
        'target_peserta',
        'berkas',
        'poster',
        'tanggalacara',
        'selesaiacara',
    ];
}