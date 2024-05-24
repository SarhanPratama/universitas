<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'jadwal';

    protected $fillable = [
        'idta',
        'iddosen',
        'idhari',
        'idkelas',
        'idruang',
        'idmatkul',
        'masuk',
        'keluar',
    ];

    /**
     * Get the user that owns the jadwalModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tahunakademik()
    {
        return $this->belongsTo(tahunAkademikModel::class, 'idta', 'id');
    }
   
    public function dosen()
    {
        return $this->belongsTo(dosenModel::class, 'iddosen', 'id');
    }

    public function hari()
    {
        return $this->belongsTo(hariModel::class, 'idhari', 'id');
    }
    public function kelas()
    {
        return $this->belongsTo(kelasModel::class, 'idkelas', 'id');
    }
    public function ruang()
    {
        return $this->belongsTo(ruangModel::class, 'idruang', 'id');
    }
    public function matkul()
    {
        return $this->belongsTo(matkulModel::class, 'idmatkul', 'id');
    }
}
