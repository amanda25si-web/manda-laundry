<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaketLaundry extends Model
{
    protected $table = 'paket_laundry';

    protected $primaryKey = 'paket_id';

    protected $fillable = [
        'layanan_id',
        'nama_paket',
        'deskripsi',
        'berat_kg',
        'harga_paket',
    ];

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(
            Layanan::class,
            'layanan_id',
            'layanan_id'
        );
    }

    public function promo(): HasMany
    {
        return $this->hasMany(
            Promo::class,
            'paket_id',
            'paket_id'
        );
    }
}
