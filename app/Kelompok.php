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
    protected $table = 'kelompok' ;

     public function Project(){
        return $this->belongsTo('App\Project');
    }
}
