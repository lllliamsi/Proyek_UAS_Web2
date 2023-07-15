<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananProduk extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'pesanan';

    public $timestamps = false;
}
