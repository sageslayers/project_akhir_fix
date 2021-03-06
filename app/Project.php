<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $fillable = [
        'id',
        'project_kd',
        'project_indicator',
        'project_topic',
        'project_subtopic',
        'project_group',
        'project_phase',
        'identity_number',
        'hasQuiz',
        'hasTime',
        'kelas_id'
    ];
    public function Project_Details(){
        return $this->hasMany('App\Project_Details');
    }
    public function Kelompok(){
        return $this->hasMany('App\Kelompok');
    }
    public function Quiz(){
        return $this->hasOne('App\Quiz');
    }
    public function User(){
        return $this->hasOne('App\User','identity_number');
    }

}
