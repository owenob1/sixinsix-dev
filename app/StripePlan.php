<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripePlan extends Model
{
    protected $table = 'stripe_plans';

    protected $fillable = [
        'title', 'price','duration', 'plan_code'
    ];

}
