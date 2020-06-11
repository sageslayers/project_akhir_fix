<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai_Kelompok extends Model
{
    protected $table = 'nilai_kelompok';
    protected $fillable = [
        'nilai',
        'project__details_id',
        'kelompok_id'
    ];
}
