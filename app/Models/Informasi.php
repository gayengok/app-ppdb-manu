<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Informasi extends Model
{
    protected $table = 'informasis';

    protected $fillable = [
        'tahap',
        'tanggal',
        'deskripsi'
    ];

    // Mutator untuk format tanggal
    public function setTanggalAttribute($value)
    {
        // Jika value adalah rentang tanggal, ambil tanggal pertama
        if (strpos($value, ' - ') !== false) {
            $dates = explode(' - ', $value);
            $this->attributes['tanggal'] = trim($dates[0]);
        } else {
            $this->attributes['tanggal'] = $value;
        }
    }

    // Accessor untuk format tampilan tanggal
    public function getTanggalFormattedAttribute()
    {
        try {
            return Carbon::createFromFormat('d F Y', $this->tanggal)
                ->locale('id')
                ->translatedFormat('d F Y');
        } catch (\Exception $e) {
            return $this->tanggal;
        }
    }
}
