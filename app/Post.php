<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     protected $fillable = [
        	  'postTitle',
	          'createDate',
	          'summary',
	          'content',
	          'image',
    ];
}
