<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenjangModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'jenjang';

    protected $fillable = [
        'nama',
    ];
}
