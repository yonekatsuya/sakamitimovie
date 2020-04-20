<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Person;
use App\Article;
use App\Comment;
use App\User;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;

class MainController extends Controller
{
    public function index() {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>'','sakamiti'=>'sakamiti'];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('main.index',$param);
    }

    public function loveMemberDisp() {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::orderBy('id','desc')->paginate(20);
        $loveMemberDispFlag = '';
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>'','loveMemberDispFlag'=>'','sakamiti'=>'sakamiti'];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('main.index',$param);
    }

    public function search(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        // どのグループかを指定
        if ($request->has('sakamiti')) {
            $group = '%';
        } elseif ($request->has('nogizaka')) {
            $group = '乃木坂46';
        } elseif ($request->has('keyakizaka')) {
            $group = '欅坂46';
        } elseif ($request->has('hinatazaka')) {
            $group = '日向坂46';
        } else {
            $group = '%';
        }
        // 条件に合うレコードの取得
        $article = Article::query();
        $articles = Article::where('category','like','%'.$group)->where(function($article) use ($request) {
            $article->where('member_name','like','%'.$request->keyword.'%')
                    ->orWhere('title','like','%'.$request->keyword.'%')
                    ->orWhere('description','like','%'.$request->keyword.'%');
            })->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>$request->keyword];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);

        // 検索元のページによって、検索結果取得後の読み込みページを分岐
        if ($request->has('sakamiti')) {
            $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>$request->keyword,'sakamiti'=>'sakamiti'];
            return view('main.index',$param);
        } elseif ($request->has('nogizaka')) {
            return view('nogizaka.index',$param);
        } elseif ($request->has('keyakizaka')) {
            return view('keyakizaka.index',$param);
        } elseif ($request->has('hinatazaka')) {
            return view('hinatazaka.index',$param);
        } else {
            $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>$request->keyword,'sakamiti'=>'sakamiti'];
            return view('main.index',$param);
        }
    }

    public function categorySearch($category_name) {
        $count = CU::countUp();
        $user = Auth::user();
        $articles = Article::where('category_search',$category_name)->orderBy('id','desc')->paginate(20);
        $param = ['count'=>$count,'user'=>$user,'articles'=>$articles,'sakamiti'=>'sakamiti'];
        $sakamitiMemberCount = SMC::count();
        $param = array_merge($param,$sakamitiMemberCount);
        return view('main.index',$param);
    }

    public function chat() {
        $comments = Comment::get();
        return view('main.chat',['user'=>Auth::user(),'comments'=>$comments]);
    }

    public function add(Request $request) {
        $user = Auth::user();
        $comment = $request->input('comment');
        Comment::create([
            'comment' => $comment
        ]);
        return redirect()->route('main.chat');
    }

    public function getData() {
        $comments = Comment::orderBy('created_at','desc')->get();
        $json = ['comments'=>$comments];
        return response()->json($json);
    }
}