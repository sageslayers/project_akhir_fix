<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_details extends Model
{
    protected $primaryKey = 'users_detail_id';
    protected $fillable = ['user_id','users_details_birth','users_details_school','users_details_biography','users_details_province',
                            'users_details_country'];
    public function User(){
        return $this->belongsTo('App\User');
    }

}
