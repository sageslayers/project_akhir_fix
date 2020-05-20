<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $fillable = [
        'id',
        'project_id',
        'kelompok_nomor',
        'identity_number',
    ];
}
