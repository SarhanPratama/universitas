<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'produk';

    protected $fillable = [
        'nama',
        'harga',
        'jumlah',
        'foto',          
    ];
}
