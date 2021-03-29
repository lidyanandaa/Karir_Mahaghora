<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    protected $table = "internship";
    protected $fillable = [
    'nama_lengkap_intern',
    'jenis_kelamin_intern',
    'email_intern',
    'no_hp_intern',
    'instansi_intern',
    'jumlah_orang_intern',
    'nama_berkas_intern'];
}
