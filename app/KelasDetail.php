<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasDetail extends Model
{
    protected $table = 'kelas_detail' ;
    protected $guarded = [] ;
    public function kelas(){
        return $this->belongsTo('App\Kelas');
    }
}
