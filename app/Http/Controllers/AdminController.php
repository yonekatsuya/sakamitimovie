<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Person;
use App\Article;

class AdminController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        $param = ['user'=>$user];
        return view('admin.index',$param);
    }

    public function post(Request $request) {
        $user = Auth::user();
        $item = new Article;
        $item->user_id = $user->id;
        $item->title = $request->title;
        $item->link = $request->link;
        $item->category = $request->category;
        $item->category_search = $request->category_search;
        $item->member_name = $request->member_name;
        $item->description = $request->description;
        $item->save();
    }
}
