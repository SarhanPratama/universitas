<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'kelas';

    protected $fillable = [
        'kode',     
        'nama',     
        'idta',     
    ];

    function tahunakademik() {
        return $this->belongsTo(tahunAkademikModel::class, 'idta');

    }
}
