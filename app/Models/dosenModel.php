<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosenModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'dosen';

    protected $fillable = [
        'nidn',
        'nama',
        'jk',
        'alamat',      
        'telp',      
    ];
}
