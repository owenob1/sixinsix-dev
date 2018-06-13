<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'first_name', 'last_name','website', 'avatar','user_id'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
