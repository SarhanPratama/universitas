<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'ruang';

    protected $fillable = [
        'kode',
        'nama',
    ];
}
