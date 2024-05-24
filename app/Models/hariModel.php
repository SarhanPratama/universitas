<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hariModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hari';

    protected $fillable = [
        'nama',
    ];
}
