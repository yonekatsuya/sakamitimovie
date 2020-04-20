<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoveMember extends Model
{
    protected $fillable = [
        'user_id','nogizakaMember','keyakizakaMember','hinatazakaMember'
    ];
}
