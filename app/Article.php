<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id','title','link','category','category_search','member_name','description'
    ];

    protected $hidden = [
        'id'
    ];
}
