<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question' ;
    protected $fillable = [
        'quiz_id',
        'answer_id',
        'desc'
    ];
    public function Quiz(){
        return $this->belongsTo('App\Quiz');
    }
    public function Answer(){
        return $this->hasMany('App\Answer');
    }
}
