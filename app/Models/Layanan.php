<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'layanan_id';

    protected $fillable = [
        'nama_layanan',
        'harga',
    ];

    public function paketLaundry()
    {
        return $this->hasMany(PaketLaundry::class, 'layanan_id', 'layanan_id');
    }
}
