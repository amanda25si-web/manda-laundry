<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'petugas_id';

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'jabatan'
    ];
}
