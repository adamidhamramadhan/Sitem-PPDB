<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiRapot extends Model
{
    use HasFactory;

    protected $table = "nilai_rapot";

    protected $fillable = [
        'pendaftaran_id',
        'bahasa_indonesia',
        'bahasa_inggris',
        'mtk',
        'ipa',
        'total_rata2',
        'created_at',
        'updated_at',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}
