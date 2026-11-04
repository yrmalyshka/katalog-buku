<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    // Guarded: Daftar kolom yang tidak diizinkan untuk diisi pengguna
    // protected $guarded = ['id', 'created_at', 'updated_at'];
    // fillable: Daftar kolom yang diizinkan untuk diisi pengguna
    protected $fillable = ['nama'];
}
