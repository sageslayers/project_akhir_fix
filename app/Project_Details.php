<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_Details extends Model
{
    protected $table = 'project_details';
    protected $fillable = [
        'project_id',
        'project_details_link',
        'project_details_description',
        'project_details_start_time',
        'project_details_end_time',
        'project_details_type'

    ];

    public function Project(){
        return $this->belongsTo('App\Project');
    }

    public function Komentar(){
        return $this->hasMany('App\Komentar');
    }
}
