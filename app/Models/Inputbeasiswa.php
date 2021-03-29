<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputbeasiswa extends Model
{
    use HasFactory;
    protected $table = "inputbeasiswa";
    protected $fillable = [
        'judul1',
        'konten1'
    ];
}
