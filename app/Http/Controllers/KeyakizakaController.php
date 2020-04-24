<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;
use App\Http\Controllers\CategoryCountController as CCC;

class KeyakizakaController extends Controller
{
    public function index(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('category','欅坂46')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>'','sakamiti'=>'sakamiti'];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('keyakizaka.index',$param);
    }
}