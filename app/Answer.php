<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answer' ;
    protected $fillable = [
        'question_id' ,
        'desc'
    ];
    public function Question(){
        return $this->belongsTo('App\Question');
    }
}
