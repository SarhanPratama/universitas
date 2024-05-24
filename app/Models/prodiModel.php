<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodiModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'prodi';

    protected $fillable = [
        'idfak',
        'kode',
        'nama',
        'idjenjang',
        'tglsk',
        'akreditasi',
    ];
    

    public function fakultas() {
        return $this->belongsTo(fakultasModel::class, 'idfak', 'id');
    }
    public function jenjang() {
        return $this->belongsTo(jenjangModel::class, 'idjenjang', 'id');
    }
    }
