<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;

class NogizakaMemberController extends Controller
{
    public function akimoto(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','秋元真夏')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.akimoto',$param);
    }

    public function asuka(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','齋藤飛鳥')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.asuka',$param);
    }

    public function ayane(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','鈴木絢音')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.ayane',$param);
    }

    public function sakura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','遠藤さくら')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.sakura',$param);
    }

    public function hayakawa(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','早川聖良')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.hayakawa',$param);
    }

    public function higuchi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','樋口日菜')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.higuchi',$param);
    }

    public function hori(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','堀未央奈')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.hori',$param);
    }

    public function hoshino(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','星野みなみ')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.hoshino',$param);
    }

    public function ikuta(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','生田絵梨花')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.ikuta',$param);
    }

    public function kaede(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','佐藤楓')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.kaede',$param);
    }

    public function kakehashi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','掛橋沙也加')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.kakehashi',$param);
    }

    public function kaki(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','賀喜遥香')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.kaki',$param);
    }

    public function kanagawa(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','金川沙耶')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.kanagawa',$param);
    }

    public function kitagawa(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','北川悠里')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.kitagawa',$param);
    }

    public function kitano(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','北野日奈子')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.kitano',$param);
    }

    public function kotoko(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','佐々木琴子')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.kotoko',$param);
    }

    public function shiori(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','久保史緒里')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.shiori',$param);
    }

    public function matsumura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','松村沙友理')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.matsumura',$param);
    }

    public function momoko(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','大園桃子')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.momoko',$param);
    }

    public function mukai(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','向井葉月')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.mukai',$param);
    }

    public function nakada(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','中田花奈')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.nakada',$param);
    }

    public function nakamura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','中村麗乃')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.nakamura',$param);
    }

    public function ranze(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','寺田蘭世')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.ranze',$param);
    }

    public function renka(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','岩本蓮華')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.renka',$param);
    }

    public function riria(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','伊藤理々杏')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.riria',$param);
    }

    public function sayuri(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','井上小百合')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.sayuri',$param);
    }

    public function seimiya(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','清宮レイ')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.seimiya',$param);
    }

    public function shibata(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','柴田由那')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.shibata',$param);
    }

    public function shinuchi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','新内眞衣')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.shinuchi',$param);
    }

    public function shiraishi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','白石麻衣')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.shiraishi',$param);
    }

    public function takayama(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','高山一実')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.takayama',$param);
    }

    public function sakaguchi(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','阪口珠美')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.sakaguchi',$param);
    }

    public function tamura(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','田村真佑')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.tamura',$param);
    }

    public function tsutsui(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','筒井あやめ')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.tsutsui',$param);
    }

    public function umezawa(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','梅澤美波')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.umezawa',$param);
    }

    public function wada(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','和田まあや')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.wada',$param);
    }

    public function miria(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','渡辺みり愛')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.miria',$param);
    }

    public function yakubo(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','矢久保美緒')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.yakubo',$param);
    }

    public function yamashita(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','山下美月')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.yamashita',$param);
    }

    public function yamasaki(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','山崎怜奈')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.yamasaki',$param);
    }

    public function yoda(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','与田祐希')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.yoda',$param);
    }

    public function yoshida(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','吉田彩乃クリスティー')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.yoshida',$param);
    }

    public function zyunna(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('member_name','伊藤純奈')->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('nogizakaMember.zyunna',$param);
    }
}
