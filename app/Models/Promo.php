<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promo extends Model
{
    protected $table = 'promo';

    protected $primaryKey = 'promo_id';

    protected $fillable = [
        'paket_id',
        'nama_promo',
        'deskripsi',
        'diskon_persen',
        'tanggal_mulai',
        'tanggal_berakhir',
    ];

    public function paket(): BelongsTo
    {
        return $this->belongsTo(
            PaketLaundry::class,
            'paket_id',
            'paket_id'
        );
    }
}
