<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable= [
        'nisn',
        'nama_siswa',
        'tanggal_lahir',
        'jenis_kelamin',
        'id_kelas',
        'image'
    ];

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
