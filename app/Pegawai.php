<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['nama_belakang','nama_depan','jenis_kelamin','agama','alamat'];
}
