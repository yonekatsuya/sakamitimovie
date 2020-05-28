<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Person;
use App\Article;
use App\Comment;
use App\User;
use App\LoveMember;
use App\Http\Controllers\CountUpController as CU;
use App\Http\Controllers\SakamitiMemberCount as SMC;
use App\Http\Controllers\CategoryCountController as CCC;
use App\Http\Controllers\UserLoveMemberCountController as  ULC;

class MainController extends Controller
{
    public function index() {
        $count = CU::countUp();
        $user = Auth::user();
        $users = User::all();
        $articles = Article::orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>'','sakamiti'=>'sakamiti','users'=>$users];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $loveMemberUserCount = ULC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount,$loveMemberUserCount);
        return view('main.index',$param);
    }

    public function loveMemberDisp() {
        $count = CU::countUp();
        $user = Auth::user();
        $users = User::all();
        $articles = Article::orderBy('id','desc')->paginate(20);
        $loveMemberDispFlag = '';
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>'','loveMemberDispFlag'=>'','sakamiti'=>'sakamiti','users'=>$users];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $loveMemberUserCount = ULC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount,$loveMemberUserCount);
        return view('main.index',$param);
    }

    public function search(Request $request) {
        $count = CU::countUp();
        $user = Auth::user();
        $users = User::all();
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
                    ->orWhere('title','like','%'.$request->keyword.'%');
            })->orderBy('id','desc')->paginate(20);
        $param = ['user'=>$user,'count'=>$count,'articles'=>$articles,'keyword'=>$request->keyword,'sakamiti'=>'sakamiti','users'=>$users];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $loveMemberUserCount = ULC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount,$loveMemberUserCount);

        // 検索元のページによって、検索結果取得後の読み込みページを分岐
        if ($request->has('sakamiti')) {
            return view('main.index',$param);
        } elseif ($request->has('nogizaka')) {
            return view('nogizaka.index',$param);
        } elseif ($request->has('keyakizaka')) {
            return view('keyakizaka.index',$param);
        } elseif ($request->has('hinatazaka')) {
            return view('hinatazaka.index',$param);
        } else {
            return view('main.index',$param);
        }
    }

    public function categorySearch($category_name) {
        $count = CU::countUp();
        $user = Auth::user();
        $users = User::all();
        $articles = Article::where('category_search',$category_name)->orderBy('id','desc')->paginate(20);
        $param = ['count'=>$count,'user'=>$user,'articles'=>$articles,'sakamiti'=>'sakamiti','users'=>$users];
        $sakamitiMemberCount = SMC::count();
        $categoryCount = CCC::count();
        $loveMemberUserCount = ULC::count();
        $param = array_merge($param,$sakamitiMemberCount,$categoryCount,$loveMemberUserCount);
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

    public function loveRegisterUserGet(Request $request) {
        if ($request->name === 'nogizaka') {
            $nogizakaMemberName = $request->nogizakaMemberName;
            $user_id = LoveMember::where('nogizakaMember',$nogizakaMemberName)->get(['user_id']);
        } else if ($request->name === 'keyakizaka') {
            $keyakizakaMemberName = $request->keyakizakaMemberName;
            $user_id = LoveMember::where('keyakizakaMember',$keyakizakaMemberName)->get(['user_id']);
        } else if ($request->name === 'hinatazaka') {
            $hinatazakaMemberName = $request->hinatazakaMemberName;
            $user_id = LoveMember::where('hinatazakaMember',$hinatazakaMemberName)->get(['user_id']);
        }
        for ($i=0;$i<count($user_id);$i++) {
            $users[] = User::where('id',$user_id[$i]->user_id)->get();
        }
        $json = ['users'=>$users];
        return response()->json($json);
    }
}