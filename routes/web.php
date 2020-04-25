<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'user'], function() {
  Route::group(['middleware'=>'auth'], function() {
    // Route::get('/profile','MainController@index')->name('user.profile');
    Route::get('/logout','UserController@getLogout')->name('user.logout');
    Route::get('/index','UserController@index')->name('user.index');
    Route::get('/loveMemberIndex','UserController@loveMemberIndex')->name('user.loveMemberIndex');
    Route::get('/show/{id}','UserController@show')->name('user.show');
    Route::get('/edit/{id}','UserController@edit')->name('user.edit');
    Route::post('/update','UserController@update')->name('user.update');
    Route::get('/loveRegister','UserController@loveRegister')->name('user.loveRegister');
  });
  Route::group(['middleware'=>'guest'], function() {
    Route::get('/signup','UserController@getSignup')->name('user.signup');
    Route::post('/signup','UserController@postSignup')->name('user.signup');
    Route::get('/signin','UserController@getSignin')->name('user.signin');
    Route::post('/signin','UserController@postSignin')->name('user.signin');
  });
});

// チャット機能
Route::get('chat','MainController@chat')->name('main.chat');

// チャットメッセージ登録
Route::post('add','MainController@add')->name('add');

// チャットデータ取得のAPI
Route::get('result','MainController@getData')->name('getData');

// 坂道グループ動画館のトップページ
Route::get('/','MainController@index')->name('top');
Route::get('loveMemberDisp','MainController@loveMemberDisp')->name('loveMemberDisp');
// 乃木坂動画館のトップページ
Route::get('nogizaka','NogizakaController@index')->name('nogizaka');
// 欅坂動画館のトップページ
Route::get('keyakizaka','KeyakizakaController@index')->name('keyakizaka');
// 日向坂動画館のトップページ
Route::get('hinatazaka','HinatazakaController@index')->name('hinatazaka');

// 管理者ページ
Route::get('admin','AdminController@index')->name('getAdmin');
// videoIdを入力して、動画をDB保存
Route::post('admin','AdminController@post')->name('postAdmin');

// 検索実行後のページネーション
Route::get('search','MainController@search')->name('getSearch');
// 検索実行
Route::post('search','MainController@search')->name('postSearch');
// カテゴリ検索
Route::get('categorySearch/{category_name}','MainController@categorySearch')->name('categorySearch');
// 認証関連のルーティング一覧
Auth::routes();

// ログインURL
Route::get('auth/twitter', 'Auth\TwitterController@redirectToProvider')->name('auth.login');
// コールバックURL
Route::get('auth/twitter/callback', 'Auth\TwitterController@handleProviderCallback')->name('auth.callback');
// ログアウトURL
Route::get('auth/twitter/logout', 'Auth\TwitterController@logout')->name('auth.logout');



// 乃木坂メンバーページ
Route::get('nogizakaAkimoto','NogizakaMemberController@akimoto')->name('nogizakaAkimoto');
Route::get('nogizakaAsuka','NogizakaMemberController@asuka')->name('nogizakaAsuka');
Route::get('nogizakaAyane','NogizakaMemberController@ayane')->name('nogizakaAyane');
Route::get('nogizakaSakura','NogizakaMemberController@sakura')->name('nogizakaSakura');
Route::get('nogizakaHayakawa','NogizakaMemberController@hayakawa')->name('nogizakaHayakawa');
Route::get('nogizakaHiguchi','NogizakaMemberController@higuchi')->name('nogizakaHiguchi');
Route::get('nogizakaHori','NogizakaMemberController@hori')->name('nogizakaHori');
Route::get('nogizakaHoshino','NogizakaMemberController@hoshino')->name('nogizakaHoshino');
Route::get('nogizakaIkuta','NogizakaMemberController@ikuta')->name('nogizakaIkuta');
Route::get('nogizakaKaede','NogizakaMemberController@kaede')->name('nogizakaKaede');
Route::get('nogizakaKakehashi','NogizakaMemberController@kakehashi')->name('nogizakaKakehashi');
Route::get('nogizakaKaki','NogizakaMemberController@kaki')->name('nogizakaKaki');
Route::get('nogizakaKanagawa','NogizakaMemberController@kanagawa')->name('nogizakaKanagawa');
Route::get('nogizakaKitagawa','NogizakaMemberController@kitagawa')->name('nogizakaKitagawa');
Route::get('nogizakaKitano','NogizakaMemberController@kitano')->name('nogizakaKitano');
Route::get('nogizakaKotoko','NogizakaMemberController@kotoko')->name('nogizakaKotoko');
Route::get('nogizakaShiori','NogizakaMemberController@shiori')->name('nogizakaShiori');
Route::get('nogizakaMatsumura','NogizakaMemberController@matsumura')->name('nogizakaMatsumura');
Route::get('nogizakaMomoko','NogizakaMemberController@momoko')->name('nogizakaMomoko');
Route::get('nogizakaMukai','NogizakaMemberController@mukai')->name('nogizakaMukai');
Route::get('nogizakaNakada','NogizakaMemberController@nakada')->name('nogizakaNakada');
Route::get('nogizakaNakamura','NogizakaMemberController@nakamura')->name('nogizakaNakamura');
Route::get('nogizakaRanze','NogizakaMemberController@ranze')->name('nogizakaRanze');
Route::get('nogizakaRenka','NogizakaMemberController@renka')->name('nogizakaRenka');
Route::get('nogizakaRiria','NogizakaMemberController@riria')->name('nogizakaRiria');
Route::get('nogizakaSayuri','NogizakaMemberController@sayuri')->name('nogizakaSayuri');
Route::get('nogizakaSeimiya','NogizakaMemberController@seimiya')->name('nogizakaSeimiya');
Route::get('nogizakaShibata','NogizakaMemberController@shibata')->name('nogizakaShibata');
Route::get('nogizakaShinuchi','NogizakaMemberController@shinuchi')->name('nogizakaShinuchi');
Route::get('nogizakaShiraishi','NogizakaMemberController@shiraishi')->name('nogizakaShiraishi');
Route::get('nogizakaTakayama','NogizakaMemberController@takayama')->name('nogizakaTakayama');
Route::get('nogizakaSakaguchi','NogizakaMemberController@sakaguchi')->name('nogizakaSakaguchi');
Route::get('nogizakaTamura','NogizakaMemberController@tamura')->name('nogizakaTamura');
Route::get('nogizakaTsutsui','NogizakaMemberController@tsutsui')->name('nogizakaTsutsui');
Route::get('nogizakaUmezawa','NogizakaMemberController@umezawa')->name('nogizakaUmezawa');
Route::get('nogizakaWada','NogizakaMemberController@wada')->name('nogizakaWada');
Route::get('nogizakaMiria','NogizakaMemberController@miria')->name('nogizakaMiria');
Route::get('nogizakaYakubo','NogizakaMemberController@Yakubo')->name('nogizakaYakubo');
Route::get('nogizakaYamashita','NogizakaMemberController@yamashita')->name('nogizakaYamashita');
Route::get('nogizakaYamasaki','NogizakaMemberController@yamasaki')->name('nogizakaYamasaki');
Route::get('nogizakaYoda','NogizakaMemberController@yoda')->name('nogizakaYoda');
Route::get('nogizakaYoshida','NogizakaMemberController@yoshida')->name('nogizakaYoshida');
Route::get('nogizakaZyunna','NogizakaMemberController@zyunna')->name('nogizakaZyunna');


// 欅坂メンバーページ
Route::get('keyakizakaHabu','KeyakizakaMemberController@habu')->name('keyakizakaHabu');
Route::get('keyakizakaHarada','KeyakizakaMemberController@harada')->name('keyakizakaHarada');
Route::get('keyakizakaHuziyoshi','KeyakizakaMemberController@huziyoshi')->name('keyakizakaHuziyoshi');
Route::get('keyakizakaInoue','KeyakizakaMemberController@inoue')->name('keyakizakaInoue');
Route::get('keyakizakaIshimori','KeyakizakaMemberController@ishimori')->name('keyakizakaIshimori');
Route::get('keyakizakaKobayashi','KeyakizakaMemberController@kobayashi')->name('keyakizakaKobayashi');
Route::get('keyakizakaKoike','KeyakizakaMemberController@koike')->name('keyakizakaKoike');
Route::get('keyakizakaMatsuda','KeyakizakaMemberController@matsuda')->name('keyakizakaMatsuda');
Route::get('keyakizakaMatsudaira','KeyakizakaMemberController@matsudaira')->name('keyakizakaMatsudaira');
Route::get('keyakizakaMorita','KeyakizakaMemberController@morita')->name('keyakizakaMorita');
Route::get('keyakizakaMoriya','KeyakizakaMemberController@moriya')->name('keyakizakaMoriya');
Route::get('keyakizakaNagasawa','KeyakizakaMemberController@nagasawa')->name('keyakizakaNagasawa');
Route::get('keyakizakaOzeki','KeyakizakaMemberController@ozeki')->name('keyakizakaOzeki');
Route::get('keyakizakaRisa','KeyakizakaMemberController@risa')->name('keyakizakaRisa');
Route::get('keyakizakaSaito','KeyakizakaMemberController@saito')->name('keyakizakaSaito');
Route::get('keyakizakaSato','KeyakizakaMemberController@sato')->name('keyakizakaSato');
Route::get('keyakizakaSeki','KeyakizakaMemberController@seki')->name('keyakizakaSeki');
Route::get('keyakizakaSugai','KeyakizakaMemberController@sugai')->name('keyakizakaSugai');
Route::get('keyakizakaTakemoto','KeyakizakaMemberController@takemoto')->name('keyakizakaTakemoto');
Route::get('keyakizakaTamura','KeyakizakaMemberController@tamura')->name('keyakizakaTamura');
Route::get('keyakizakaUemura','KeyakizakaMemberController@uemura')->name('keyakizakaUemura');
Route::get('keyakizakaRika','KeyakizakaMemberController@rika')->name('keyakizakaRika');
Route::get('keyakizakaTen','KeyakizakaMemberController@ten')->name('keyakizakaTen');



// 日向坂メンバーページ
Route::get('hinatazakaHamagishi','HinatazakaMemberController@hamagishi')->name('hinatazakaHamagishi');
Route::get('hinatazakaHigashimura','HinatazakaMemberController@higashimura')->name('hinatazakaHigashimura');
Route::get('hinatazakaKageyama','HinatazakaMemberController@kageyama')->name('hinatazakaKageyama');
Route::get('hinatazakaKamimura','HinatazakaMemberController@kamimura')->name('hinatazakaKamimura');
Route::get('hinatazakaKanemura','HinatazakaMemberController@kanemura')->name('hinatazakaKanemura');
Route::get('hinatazakaKato','HinatazakaMemberController@kato')->name('hinatazakaKato');
Route::get('hinatazakaKawata','HinatazakaMemberController@kawata')->name('hinatazakaKawata');
Route::get('hinatazakaKosaka','HinatazakaMemberController@kosaka')->name('hinatazakaKosaka');
Route::get('hinatazakaKumi','HinatazakaMemberController@kumi')->name('hinatazakaKumi');
Route::get('hinatazakaKonoka','HinatazakaMemberController@konoka')->name('hinatazakaKonoka');
Route::get('hinatazakaMirei','HinatazakaMemberController@mirei')->name('hinatazakaMirei');
Route::get('hinatazakaManamo','HinatazakaMemberController@manamo')->name('hinatazakaManamo');
Route::get('hinatazakaNibu','HinatazakaMemberController@nibu')->name('hinatazakaNibu');
Route::get('hinatazakaSaito','HinatazakaMemberController@saito')->name('hinatazakaSaito');
Route::get('hinatazakaTakamoto','HinatazakaMemberController@takamoto')->name('hinatazakaTakamoto');
Route::get('hinatazakaTakase','HinatazakaMemberController@takase')->name('hinatazakaTakase');
Route::get('hinatazakaTomita','HinatazakaMemberController@tomita')->name('hinatazakaTomita');
Route::get('hinatazakaUshio','HinatazakaMemberController@ushio')->name('hinatazakaUshio');
Route::get('hinatazakaMiho','HinatazakaMemberController@miho')->name('hinatazakaMiho');