<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = "pendaftaran";
    
    protected $fillable = [
        'user_id',
        'nama_siswa',
        'nisn',
        'nik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'foto',
        'foto_akte',
        'agama',
        'alamat',
        'nohp',
        'nama_ayah',
        'pekerjaan_ayah',
        'nohp_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'nohp_ibu',
        'asal_sekolah',
        'foto_rapot',
        'foto_ijazah',
        'status_pendaftaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nilai_rapot()
    {
        return $this->hasOne(NilaiRapot::class);
    }

    public function perangkingan()
    {
        return $this->hasOne(Perangkingan::class);
    }
}
