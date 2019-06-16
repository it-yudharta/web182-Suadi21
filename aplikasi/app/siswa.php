<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama','kelas','jurusan','nama_alat','jam_pinjam','jam_kembali','keterangan'];
}
