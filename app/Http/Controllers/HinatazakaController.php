<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;

class HinatazakaController extends Controller
{
    public function index(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('category','日向坂46')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('hinatazaka.index',$param);
    }
}