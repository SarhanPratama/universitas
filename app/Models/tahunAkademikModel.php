<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahunAkademikModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tahun_akademik';

    protected $fillable = [
        'kode',      
        'nama',      
    ];

}
