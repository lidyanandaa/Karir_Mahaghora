<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputhome extends Model
{
    use HasFactory;
    protected $table = "inputhome";
    protected $fillable = [
        'konten1',
        'konten2',
        'konten3',
        'konten4'
    ];
}
