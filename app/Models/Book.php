<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books'; // Nama tabel di database

    // Daftar kolom yang diizinkan untuk diisi pengguna
    protected $fillable = ['title', 'author', 'year', 'price', 'stock'];
}
