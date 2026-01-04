<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $table = 'registrasi_event';

    protected $fillable = [
        'user_id',
        'event_id',
        'nama_peserta',
        'email',
        'nomor_hp',
        'status_registrasi',
    ];
}
