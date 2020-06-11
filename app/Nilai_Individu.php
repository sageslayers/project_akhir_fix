<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai_Individu extends Model
{
    protected $table = 'nilai_individu';
    protected $fillable = [
        'nilai',
        'project_id',
        'identity_number'
    ];
}
