<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkingan extends Model
{
    use HasFactory;

    protected $table = "perangkingan";

    protected $fillable = [
        'pendaftaran_id',
        'nilai_ujian',
        'nilai_wawancara',
        'total_rata2',
        'created_at',
        'updated_at',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}
