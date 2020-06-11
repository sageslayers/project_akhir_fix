<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok_Detail extends Model
{
    protected $fillable = [
        'id',
        'kelompok_id',
        'identity_number',
    ];
    protected $table = 'kelompok_detail' ;

     public function Kelompok(){
        return $this->belongsTo('App\Kelompok');
    }
}
