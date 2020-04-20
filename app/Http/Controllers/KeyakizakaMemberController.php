<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;

class KeyakizakaMemberController extends Controller
{
    public function habu(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','土生瑞穂')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.habu',$param);
    }

    public function harada(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','原田葵')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.harada',$param);
    }

    public function huziyoshi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','藤吉夏鈴')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.huziyoshi',$param);
    }

    public function inoue(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','井上梨奈')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.inoue',$param);
    }

    public function ishimori(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','石森虹花')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.ishimori',$param);
    }

    public function kobayashi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','小林由衣')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.kobayashi',$param);
    }

    public function koike(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','小池美波')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.koike',$param);
    }

    public function matsuda(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','松田里奈')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.matsuda',$param);
    }

    public function matsudaira(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','松平璃子')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.matsudaira',$param);
    }

    public function morita(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','森田ひかる')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.morita',$param);
    }

    public function moriya(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','守屋茜')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.moriya',$param);
    }

    public function nagasawa(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','長沢菜々香')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.nagasawa',$param);
    }

    public function ozeki(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','尾関梨香')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.ozeki',$param);
    }

    public function risa(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','渡邉理佐')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.risa',$param);
    }

    public function saito(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','齋藤冬優花')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.saito',$param);
    }

    public function sato(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','佐藤詩織')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.sato',$param);
    }

    public function seki(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','関由美子')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.seki',$param);
    }

    public function sugai(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','菅井友香')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.sugai',$param);
    }

    public function takemoto(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','武本唯衣')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.takemoto',$param);
    }

    public function tamura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','田村保乃')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.tamura',$param);
    }

    public function uemura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','上村莉菜')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.uemura',$param);
    }

    public function rika(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','渡辺梨加')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.rika',$param);
    }

    public function ten(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','山崎天')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('keyakizakaMember.ten',$param);
    }
}
