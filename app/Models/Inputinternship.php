<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputinternship extends Model
{
    use HasFactory;
    protected $table = "inputinternship";
    protected $fillable = [
        'konten1',
        'konten2',
        'judul1',
        'konten3',
        'konten4',
        'konten5'
    ];
}
