<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['name'];

    public $timestamps = false;
}
