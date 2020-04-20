<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment'
    ];

    protected $guarded = [
        'id','created_at','updated_at'
    ];
}
