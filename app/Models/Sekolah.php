<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    function siswa() {
        return $this->hasMany(Siswa::class);
    }
    protected $table = 'sekolah';
    protected $guarded = ['id'];

}
