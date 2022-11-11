<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'tabel_kelas';
    protected $fillable = ['fakultas', 'prodi', 'kelas', 'isi'];
}
