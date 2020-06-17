<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz' ;
    protected $fillable = [
        'project_id' ,
        'start_time' ,
        'end_time'
    ];
    public function Project(){
        return $this->belongsTo('App\Project');
    }
    public function Question(){
        return $this->hasMany('App\Question');
    }
}
