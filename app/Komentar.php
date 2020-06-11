<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = "komentar";
    public function Project_Details(){
        return $this->belongsTo('App\Project_Details');
    }
    protected $fillable = [
        'project__details_id',
        'kelompok_id',
        'komentar_desc',
        'identity_number',
        'link',
    ];
}
