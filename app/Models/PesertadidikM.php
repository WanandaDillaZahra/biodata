<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertadidikM extends Model
{
    use HasFactory;
    protected $table = 'pesertadidik';
    protected $fillable = ['id', 'nis', 'namalengkap', 'jk', 'nilai'];
}
