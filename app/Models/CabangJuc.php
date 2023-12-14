<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangJuc extends Model
{
    use HasFactory;

    protected $table = 'cabang_juc';

    protected $fillable=['nama_tempat', 'pic', 'no_telp', 'alamat', 'latitude', 'longitude'];
}
