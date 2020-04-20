<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Count;

class CountUpController extends Controller
{
    public static function countUp() {
        $count = new Count;
        $count->name = '';
        $count->save();
        $count = Count::all();
        return $count;
    }
}
