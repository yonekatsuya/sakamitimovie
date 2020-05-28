<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;
use App\Http\Controllers\CategoryCountController as CCC;
use App\Http\Controllers\UserLoveMemberCountController as  ULC;

class NogizakaController extends Controller
{
    public function index(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $users = User::all();
        $articles = Article::where('category','乃木坂46')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>'','sakamiti'=>'sakamiti','users'=>$users];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $loveMemberUserCount = ULC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount,$loveMemberUserCount);
        return view('nogizaka.index',$param);
    }
}