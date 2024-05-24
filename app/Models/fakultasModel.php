<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultasModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'fakultas';
    
    protected $fillable = [
        'kode',
        'nama',
        'iddosen',
    ];

    public function prodi() {
        return $this->hasMany(prodiModel::class);
    }

    public function dosen()
    {
        return $this->belongsTo(dosenModel::class, 'iddosen', 'id');
    }
}
