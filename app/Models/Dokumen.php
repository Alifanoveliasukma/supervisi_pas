<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'tb_dokumen';
    protected $fillable = ['id', 'nip', 'mapel', 'rpp', 'embed', 'status'];
}
