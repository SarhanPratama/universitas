<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkulModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'matkul';

    protected $fillable = [
        'kode',
        'nama',
        'sks',
    ];
}
