<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'alamat',
        'telp',
        'dosen_pa',
        'idprodi'
    ];

    public function dosen()
    {
        return $this->belongsTo(dosenModel::class, 'dosen_pa', 'id');
    }
    public function prodi()
    {
        return $this->belongsTo(prodiModel::class, 'idprodi', 'id');
    }
}
