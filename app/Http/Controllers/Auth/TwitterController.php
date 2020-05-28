<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Illuminate\Http\Request;
use Auth;
use App\Person;
use App\User;

class TwitterController extends Controller
{

    // ログイン
    public function redirectToProvider(){
        return Socialite::driver('twitter')->redirect();
    }

    // コールバック
    public function handleProviderCallback(){
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }
        // ログイン処理
        $user = User::where('id', $twitterUser->id)->first();
        if (!$user) {
            $user = User::create([
                'id' => $twitterUser->id,
                'nickname' => $twitterUser->nickname,
                'name' => $twitterUser->name,
                'avatar' => $twitterUser->avatar,
                'followers_count' => $twitterUser->user['followers_count'],
                'friends_count' => $twitterUser->user['friends_count'],
                'favourites_count' => $twitterUser->user['favourites_count'],
                'location' => $twitterUser->user['location'],
                'description' => $twitterUser->user['description'],
          ]);
        }
        Auth::login($user);
        return redirect('/');
    }

    // ログアウト
    public function logout(Request $request)
    {
        // 各自ログアウト処理
        // 例
        Auth::logout();
        return redirect('/');
    }
}