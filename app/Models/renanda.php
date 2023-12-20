<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class renanda extends Model
{
    use HasFactory;
    protected $table= "2225230096";
    protected $fillable= ['Nama', 'NIM', 'Kelas', 'Angkatan'];
}
