<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    //
     protected $fillable = [
        	'achievementName',
            'achievementDate',
            'achievementLink',
            'achievementText',
    ];

}
