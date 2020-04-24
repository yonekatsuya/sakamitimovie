<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;
use App\Http\Controllers\CategoryCountController as CCC;

class HinatazakaMemberController extends Controller
{
    public function hamagishi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','濱岸ひより')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.hamagishi',$param);
    }

    public function higashimura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','東村芽依')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.higashimura',$param);
    }

    public function kageyama(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','影山優佳')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.kageyama',$param);
    }

    public function kamimura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','上村ひなの')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.kamimura',$param);
    }

    public function kanemura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','金村美玖')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.kanemura',$param);
    }

    public function kato(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','加藤史帆')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.kato',$param);
    }

    public function kawata(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','河田陽菜')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.kawata',$param);
    }

    public function kosaka(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','小坂菜緒')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.kosaka',$param);
    }

    public function kumi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','佐々木久美')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.kumi',$param);
    }

    public function konoka(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','松田好花')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.konoka',$param);
    }

    public function mirei(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','佐々木美玲')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.mirei',$param);
    }

    public function manamo(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','宮田愛萌')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.manamo',$param);
    }

    public function nibu(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','丹生明里')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.nibu',$param);
    }

    public function saito(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','齊藤京子')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.saito',$param);
    }

    public function takamoto(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','高本彩花')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.takamoto',$param);
    }

    public function takase(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','高瀬愛奈')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.takase',$param);
    }

    public function tomita(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','富田鈴花')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.tomita',$param);
    }

    public function ushio(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','潮紗理菜')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.ushio',$param);
    }

    public function miho(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','渡邉美穂')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount);
        return view('hinatazakaMember.miho',$param);
    }
}
