<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $table = "cv";
    protected $fillable = [
    'nama_lengkap_cv',
    'jenis_kelamin_cv',
    'email_cv',
    'no_hp_cv',
    'pendidikan_terakhir_cv',
    'nama_berkas_cv'];
}