<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\loveMember;

class UserController extends Controller
{
    public function getSignup() {
        return view('user.signup',['user'=>Auth::user()]);
    }

    public function postSignup(Request $request) {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('loveMemberDisp',['user'=>Auth::user()]);
        }

    }

    public function getProfile() {
        return view('user.profile',['user'=>Auth::user()]);
    }

    public function getSignin() {
        return view('user.signin',['user'=>Auth::user()]);
    }

    public function postSignin(Request $request) {
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('top',['user'=>Auth::user()]);
        }
        return redirect()->back(['user'=>Auth::user()]);
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('user.signin');
    }

    public function index() {
        $user = Auth::user();
        $users = User::get();
        $param = ['user'=>$user,'users'=>$users];
        return view('user.index',$param);
    }

    public function loveMemberIndex() {
        $user = Auth::user();
        // ログインユーザーの推しメン情報を取得
        $userLoveMember = loveMember::where('user_id',$user->id)->first();
        // ログインユーザーと推しメンが同じユーザーの情報を取得
        $userLoveMembers = loveMember::where('nogizakaMember',$userLoveMember->nogizakaMember)->orWhere('keyakizakaMember',                 $userLoveMember->keyakizakaMember)->orWhere('hinatazakaMember',$userLoveMember->hinatazakaMember)->get();
        $userArray = [];
        // ログインユーザーと推しメンが同じユーザーの情報をusersテーブルから全件取得する
        for ($i=1;$i<count($userLoveMembers);$i++) {
            $userArray[] = User::where('id',$userLoveMembers[$i]->user_id)->pluck('name');
        }
        return view('user.loveMemberIndex',compact('user','userLoveMembers','userArray'));
    }

    public function show($id) {
        $user = Auth::user();
        $showUser = User::where('id',$id)->first();
        $param = ['user'=>$user,'showUser'=>$showUser];
        return view('user.show',$param);
    }

    public function edit($id) {
        $user = Auth::user();
        $editUser = User::where('id',$id)->first();
        $param = ['user'=>$user,'editUser'=>$editUser];
        return view('user.edit',$param);
    }

    public function update(Request $request) {
        $user = Auth::user();
        $updateUser = User::where('id',$request->id)->first();
        $updateUser->name = $request->name;
        $updateUser->email = $request->email;
        $updateUser->password = $request->password;
        $updateUser->save();
        return redirect()->route('user.show',[$request->id]);
    }

    public function loveRegister(Request $request) {
        $user = Auth::user();
        // 既に推しメン登録済みであれば、更新処理
        if (loveMember::where('user_id',$user->id)->first()) {
            $registerUser = loveMember::where('user_id',$user->id)->first();
            // 各グループの推しメンが選択されているかで処理を分岐
            if ($request->nogizakaName !== '') {
                $registerUser->nogizakaMember = $request->nogizakaName;
            }
            if ($request->keyakizakaName !== '') {
                $registerUser->keyakizakaMember = $request->keyakizakaName;
            }
            if ($request->hinatazakaName !== '') {
                $registerUser->hinatazakaMember = $request->hinatazakaName;
            }
            $registerUser->save();
            // 推しメン登録が初めてであれば、新規追加処理
        } else {
            $registerUser = new loveMember();
            $registerUser->user_id = $user->id;
            // 各グループの推しメンが選択されているかで処理を分岐
            if ($request->nogizakaName !== '') {
                $registerUser->nogizakaMember = $request->nogizakaName;
            }
            if ($request->keyakizakaName !== '') {
                $registerUser->keyakizakaMember = $request->keyakizakaName;
            }
            if ($request->hinatazakaName !== '') {
                $registerUser->hinatazakaMember = $request->hinatazakaName;
            }
            $registerUser->save();
        }
    }
}
