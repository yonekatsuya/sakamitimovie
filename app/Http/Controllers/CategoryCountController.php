<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CategoryCountController extends Controller
{
    public static function count() {
        $countNogizakaCategory1 = Article::where('category_search','人狼ゲーム')->get()->count();
        $countNogizakaCategory2 = Article::where('category_search','乃木坂工事中')->get()->count();
        $countNogizakaCategory3 = Article::where('category_search','感動系')->get()->count();
        $countNogizakaCategory4 = Article::where('category_search','MV')->get()->count();
        $countNogizakaCategory5 = Article::where('category_search','妄想リクエスト')->get()->count();
        $countNogizakaCategory6 = Article::where('category_search','ライブ')->get()->count();
        $countNogizakaCategory7 = Article::where('category_search','カップリング')->get()->count();
        $countNogizakaCategory8 = Article::where('category_search','アンダー')->get()->count();
        $countNogizakaCategory9 = Article::where('category_search','映像作品')->get()->count();
        $countNogizakaCategory10 = Article::where('category_search','46時間TV')->get()->count();
        $countNogizakaCategory11 = Article::where('category_search','ラジオ')->get()->count();
        $countNogizakaCategory12 = Article::where('category_search','選抜発表')->get()->count();
        $countNogizakaCategory13 = Article::where('category_search','らじらー！サンデー')->get()->count();
        $countNogizakaCategory14 = Article::where('category_search','ASMR')->get()->count();
        $countNogizakaCategory15 = Article::where('category_search','乃木坂世界旅')->get()->count();
        $countNogizakaCategory16 = Article::where('category_search','オールナイトニッポン')->get()->count();
        $countNogizakaCategory17 = Article::where('category_search','坂道合同オーディション配信')->get()->count();
        $countNogizakaCategory18 = Article::where('category_search','佐々木琴子のトップギア')->get()->count();
        $countNogizakaCategory19 = Article::where('category_search','乃木坂他番組')->get()->count();
        $countNogizakaCategory20 = Article::where('category_search','歌王')->get()->count();
        $countNogizakaCategory21 = Article::where('category_search','コント')->get()->count();
        $countNogizakaCategory22 = Article::where('category_search','1期生')->get()->count();
        $countNogizakaCategory23 = Article::where('category_search','2期生')->get()->count();
        $countNogizakaCategory24 = Article::where('category_search','3期生')->get()->count();
        $countNogizakaCategory25 = Article::where('category_search','4期生')->get()->count();
        $countNogizakaCategory26 = Article::where('category_search','主観')->get()->count();
        $countNogizakaCategory27 = Article::where('category_search','クリーム砲')->get()->count();
        $countNogizakaCategory28 = Article::where('category_search','6秒CM')->get()->count();
        $countNogizakaCategory29 = Article::where('category_search','マウスCM')->get()->count();
        $countNogizakaCategory30 = Article::where('category_search','真夏の全国ツアー2018')->get()->count();
        $countNogizakaCategory31 = Article::where('category_search','ドキュメンタリー')->get()->count();
        $countNogizakaCategory32 = Article::where('category_search','目覚まし')->get()->count();
        $countNogizakaCategory33 = Article::where('category_search','ハリー杉山×齋藤飛鳥')->get()->count();
        $countNogizakaCategory34 = Article::where('category_search','成人式')->get()->count();
        $countNogizakaCategory35 = Article::where('category_search','歌番組')->get()->count();
        $countNogizakaCategory36 = Article::where('category_search','CMメイキング')->get()->count();
        $countNogizakaCategory37 = Article::where('category_search','ぶらり旅')->get()->count();
        $countNogizakaCategory38 = Article::where('category_search','深イイ話')->get()->count();
        $countNogizakaCategory39 = Article::where('category_search','ユニット曲')->get()->count();
        $countNogizakaCategory40 = Article::where('category_search','ライブコール')->get()->count();
        $countNogizakaCategory41 = Article::where('category_search','乃木坂電視台')->get()->count();
        $countNogizakaCategory42 = Article::where('category_search','ラジオ文字起こし')->get()->count();
        $countNogizakaCategory43 = Article::where('category_search','乃木坂工事中未公開')->get()->count();
        $countNogizakaCategory44 = Article::where('category_search','MAD')->get()->count();
        $countNogizakaCategory45 = Article::where('category_search','乃木恋')->get()->count();
        $countNogizakaCategory46 = Article::where('category_search','生歌')->get()->count();
        $countNogizakaCategory47 = Article::where('category_search','サイコロトーク')->get()->count();
        $countNogizakaCategory48 = Article::where('category_search','紅白歌合戦')->get()->count();
        $countNogizakaCategory49 = Article::where('category_search','オルゴール')->get()->count();
        $countNogizakaCategory50 = Article::where('category_search','バナナマン×乃木坂')->get()->count();

        $countKeyakizakaCategory1 = Article::where('category_search','欅坂PV')->get()->count();
        $countKeyakizakaCategory2 = Article::where('category_search','欅坂自己紹介')->get()->count();
        $countKeyakizakaCategory3 = Article::where('category_search','欅坂KEYAKI HOUSE')->get()->count();
        $countKeyakizakaCategory4 = Article::where('category_search','欅坂欅って書けない')->get()->count();
        $countKeyakizakaCategory5 = Article::where('category_search','欅坂生歌')->get()->count();
        $countKeyakizakaCategory6 = Article::where('category_search','欅坂自撮りTV')->get()->count();
        $countKeyakizakaCategory7 = Article::where('category_search','欅坂カップリング曲')->get()->count();
        $countKeyakizakaCategory8 = Article::where('category_search','欅坂メイキング映像')->get()->count();
        $countKeyakizakaCategory9 = Article::where('category_search','欅坂特典映像')->get()->count();
        $countKeyakizakaCategory10 = Article::where('category_search','欅坂SHOWROOM')->get()->count();
        $countKeyakizakaCategory11 = Article::where('category_search','欅坂ライブ')->get()->count();
        $countKeyakizakaCategory12 = Article::where('category_search','欅坂個人PV')->get()->count();
        $countKeyakizakaCategory13 = Article::where('category_search','欅坂ラジオ')->get()->count();
        $countKeyakizakaCategory14 = Article::where('category_search','欅坂文化祭')->get()->count();
        $countKeyakizakaCategory15 = Article::where('category_search','欅坂踊ってみた')->get()->count();
        $countKeyakizakaCategory16 = Article::where('category_search','欅坂ピアノ音')->get()->count();
        $countKeyakizakaCategory17 = Article::where('category_search','欅坂こちら有楽町星空放送局')->get()->count();
        $countKeyakizakaCategory18 = Article::where('category_search','欅坂カバー')->get()->count();
        $countKeyakizakaCategory19 = Article::where('category_search','欅坂モーションランキング')->get()->count();
        $countKeyakizakaCategory20 = Article::where('category_search','欅坂MAD')->get()->count();
        $countKeyakizakaCategory21 = Article::where('category_search','欅坂ザ・ヒットスタジオ')->get()->count();
        $countKeyakizakaCategory22 = Article::where('category_search','欅坂イオンカードコラボ')->get()->count();
        $countKeyakizakaCategory23 = Article::where('category_search','欅坂アカペラ')->get()->count();
        $countKeyakizakaCategory24 = Article::where('category_search','欅坂ユニゾンエアー')->get()->count();
        $countKeyakizakaCategory25 = Article::where('category_search','欅坂CM')->get()->count();
        $countKeyakizakaCategory26 = Article::where('category_search','欅坂ドキュメンタリー')->get()->count();
        $countKeyakizakaCategory27 = Article::where('category_search','欅坂感動系')->get()->count();
        $countKeyakizakaCategory28 = Article::where('category_search','欅坂メンバー系')->get()->count();
        $countKeyakizakaCategory29 = Article::where('category_search','欅坂おもしろ')->get()->count();
        $countKeyakizakaCategory30 = Article::where('category_search','欅坂グラビア')->get()->count();
        $countKeyakizakaCategory31 = Article::where('category_search','欅坂語る系')->get()->count();
        $countKeyakizakaCategory32 = Article::where('category_search','欅坂ダンス')->get()->count();
        $countKeyakizakaCategory33 = Article::where('category_search','欅坂文字起こし')->get()->count();
        $countKeyakizakaCategory34 = Article::where('category_search','欅坂妄想リクエスト')->get()->count();
        $countKeyakizakaCategory35 = Article::where('category_search','欅坂クイズ')->get()->count();
        $countKeyakizakaCategory36 = Article::where('category_search','欅坂ひらがなけやき')->get()->count();
        $countKeyakizakaCategory37 = Article::where('category_search','欅坂運動会')->get()->count();
        $countKeyakizakaCategory38 = Article::where('category_search','欅坂欅坂×土田')->get()->count();
        $countKeyakizakaCategory39 = Article::where('category_search','欅坂スクールオブロック')->get()->count();

        $countHinatazakaCategory1 = Article::where('category_search','日向坂日向坂で会いましょう')->get()->count();
        $countHinatazakaCategory2 = Article::where('category_search','日向坂MV')->get()->count();
        $countHinatazakaCategory3 = Article::where('category_search','日向坂スナック真緒')->get()->count();
        $countHinatazakaCategory4 = Article::where('category_search','日向坂ひなたのはげまし')->get()->count();
        $countHinatazakaCategory5 = Article::where('category_search','日向坂SHOWROOM')->get()->count();
        $countHinatazakaCategory6 = Article::where('category_search','日向坂文字起こし')->get()->count();
        $countHinatazakaCategory7 = Article::where('category_search','日向坂ストーリー')->get()->count();
        $countHinatazakaCategory8 = Article::where('category_search','日向坂DASADA')->get()->count();
        $countHinatazakaCategory9 = Article::where('category_search','日向坂MAD')->get()->count();
        $countHinatazakaCategory10 = Article::where('category_search','日向坂歌番組')->get()->count();
        $countHinatazakaCategory11 = Article::where('category_search','日向坂ゲーム')->get()->count();
        $countHinatazakaCategory12 = Article::where('category_search','日向坂ASMR')->get()->count();
        $countHinatazakaCategory13 = Article::where('category_search','日向坂ダンス')->get()->count();
        $countHinatazakaCategory14 = Article::where('category_search','日向坂可愛い')->get()->count();
        $countHinatazakaCategory15 = Article::where('category_search','日向坂おもしろ')->get()->count();
        $countHinatazakaCategory16 = Article::where('category_search','日向坂日向坂×オードリー')->get()->count();
        $countHinatazakaCategory17 = Article::where('category_search','日向坂感動系')->get()->count();
        $countHinatazakaCategory18 = Article::where('category_search','日向坂ラジオ')->get()->count();
        $countHinatazakaCategory19 = Article::where('category_search','日向坂ひらがなけやき')->get()->count();
        $countHinatazakaCategory20 = Article::where('category_search','日向坂ひらがな推し')->get()->count();
        $countHinatazakaCategory21 = Article::where('category_search','日向坂写真')->get()->count();
        $countHinatazakaCategory22 = Article::where('category_search','日向坂語る系')->get()->count();
        $countHinatazakaCategory23 = Article::where('category_search','日向坂パート割')->get()->count();
        $countHinatazakaCategory24 = Article::where('category_search','日向坂自撮りTV')->get()->count();

        $param = ['countNogizakaCategory1'=>$countNogizakaCategory1,'countNogizakaCategory2'=>$countNogizakaCategory2,'countNogizakaCategory3'=>$countNogizakaCategory3,'countNogizakaCategory4'=>$countNogizakaCategory4,'countNogizakaCategory5'=>$countNogizakaCategory5,'countNogizakaCategory6'=>$countNogizakaCategory6,'countNogizakaCategory7'=>$countNogizakaCategory7,'countNogizakaCategory8'=>$countNogizakaCategory8,'countNogizakaCategory9'=>$countNogizakaCategory9,'countNogizakaCategory10'=>$countNogizakaCategory10,'countNogizakaCategory11'=>$countNogizakaCategory11,'countNogizakaCategory12'=>$countNogizakaCategory12,'countNogizakaCategory13'=>$countNogizakaCategory13,'countNogizakaCategory14'=>$countNogizakaCategory14,'countNogizakaCategory15'=>$countNogizakaCategory15,'countNogizakaCategory16'=>$countNogizakaCategory16,'countNogizakaCategory17'=>$countNogizakaCategory17,'countNogizakaCategory18'=>$countNogizakaCategory18,'countNogizakaCategory19'=>$countNogizakaCategory19,'countNogizakaCategory20'=>$countNogizakaCategory20,'countNogizakaCategory21'=>$countNogizakaCategory21,'countNogizakaCategory22'=>$countNogizakaCategory22,'countNogizakaCategory23'=>$countNogizakaCategory23,'countNogizakaCategory24'=>$countNogizakaCategory24,'countNogizakaCategory25'=>$countNogizakaCategory25,'countNogizakaCategory26'=>$countNogizakaCategory26,'countNogizakaCategory27'=>$countNogizakaCategory27,'countNogizakaCategory28'=>$countNogizakaCategory28,'countNogizakaCategory29'=>$countNogizakaCategory29,'countNogizakaCategory30'=>$countNogizakaCategory30,'countNogizakaCategory31'=>$countNogizakaCategory31,'countNogizakaCategory32'=>$countNogizakaCategory32,'countNogizakaCategory33'=>$countNogizakaCategory33,'countNogizakaCategory34'=>$countNogizakaCategory34,'countNogizakaCategory35'=>$countNogizakaCategory35,'countNogizakaCategory36'=>$countNogizakaCategory36,'countNogizakaCategory37'=>$countNogizakaCategory37,'countNogizakaCategory38'=>$countNogizakaCategory38,'countNogizakaCategory39'=>$countNogizakaCategory39,'countNogizakaCategory40'=>$countNogizakaCategory40,'countNogizakaCategory41'=>$countNogizakaCategory41,'countNogizakaCategory42'=>$countNogizakaCategory42,'countNogizakaCategory43'=>$countNogizakaCategory43,'countNogizakaCategory44'=>$countNogizakaCategory44,'countNogizakaCategory45'=>$countNogizakaCategory45,'countNogizakaCategory46'=>$countNogizakaCategory46,'countNogizakaCategory47'=>$countNogizakaCategory47,'countNogizakaCategory48'=>$countNogizakaCategory48,'countNogizakaCategory49'=>$countNogizakaCategory49,'countNogizakaCategory50'=>$countNogizakaCategory50,'countKeyakizakaCategory1'=>$countKeyakizakaCategory1,'countKeyakizakaCategory2'=>$countKeyakizakaCategory2,'countKeyakizakaCategory3'=>$countKeyakizakaCategory3,'countKeyakizakaCategory4'=>$countKeyakizakaCategory4,'countKeyakizakaCategory5'=>$countKeyakizakaCategory5,'countKeyakizakaCategory6'=>$countKeyakizakaCategory6,'countKeyakizakaCategory7'=>$countKeyakizakaCategory7,'countKeyakizakaCategory8'=>$countKeyakizakaCategory8,'countKeyakizakaCategory9'=>$countKeyakizakaCategory9,'countKeyakizakaCategory10'=>$countKeyakizakaCategory10,'countKeyakizakaCategory11'=>$countKeyakizakaCategory11,'countKeyakizakaCategory12'=>$countKeyakizakaCategory12,'countKeyakizakaCategory13'=>$countKeyakizakaCategory13,'countKeyakizakaCategory14'=>$countKeyakizakaCategory14,'countKeyakizakaCategory15'=>$countKeyakizakaCategory15,'countKeyakizakaCategory16'=>$countKeyakizakaCategory16,'countKeyakizakaCategory17'=>$countKeyakizakaCategory17,'countKeyakizakaCategory18'=>$countKeyakizakaCategory18,'countKeyakizakaCategory19'=>$countKeyakizakaCategory19,'countKeyakizakaCategory20'=>$countKeyakizakaCategory20,'countKeyakizakaCategory21'=>$countKeyakizakaCategory21,'countKeyakizakaCategory22'=>$countKeyakizakaCategory22,'countKeyakizakaCategory23'=>$countKeyakizakaCategory23,'countKeyakizakaCategory24'=>$countKeyakizakaCategory24,'countKeyakizakaCategory25'=>$countKeyakizakaCategory25,'countKeyakizakaCategory26'=>$countKeyakizakaCategory26,'countKeyakizakaCategory27'=>$countKeyakizakaCategory27,'countKeyakizakaCategory28'=>$countKeyakizakaCategory28,'countKeyakizakaCategory29'=>$countKeyakizakaCategory29,'countKeyakizakaCategory30'=>$countKeyakizakaCategory30,'countKeyakizakaCategory31'=>$countKeyakizakaCategory31,'countKeyakizakaCategory32'=>$countKeyakizakaCategory32,'countKeyakizakaCategory33'=>$countKeyakizakaCategory33,'countKeyakizakaCategory34'=>$countKeyakizakaCategory34,'countKeyakizakaCategory35'=>$countKeyakizakaCategory35,'countKeyakizakaCategory36'=>$countKeyakizakaCategory36,'countKeyakizakaCategory37'=>$countKeyakizakaCategory37,'countKeyakizakaCategory38'=>$countKeyakizakaCategory38,'countKeyakizakaCategory39'=>$countKeyakizakaCategory39,'countHinatazakaCategory1'=>$countHinatazakaCategory1,'countHinatazakaCategory2'=>$countHinatazakaCategory2,'countHinatazakaCategory3'=>$countHinatazakaCategory3,'countHinatazakaCategory4'=>$countHinatazakaCategory4,'countHinatazakaCategory5'=>$countHinatazakaCategory5,'countHinatazakaCategory6'=>$countHinatazakaCategory6,'countHinatazakaCategory7'=>$countHinatazakaCategory7,'countHinatazakaCategory8'=>$countHinatazakaCategory8,'countHinatazakaCategory9'=>$countHinatazakaCategory9,'countHinatazakaCategory10'=>$countHinatazakaCategory10,'countHinatazakaCategory11'=>$countHinatazakaCategory11,'countHinatazakaCategory12'=>$countHinatazakaCategory12,'countHinatazakaCategory13'=>$countHinatazakaCategory13,'countHinatazakaCategory14'=>$countHinatazakaCategory14,'countHinatazakaCategory15'=>$countHinatazakaCategory15,'countHinatazakaCategory16'=>$countHinatazakaCategory16,'countHinatazakaCategory17'=>$countHinatazakaCategory17,'countHinatazakaCategory18'=>$countHinatazakaCategory18,'countHinatazakaCategory19'=>$countHinatazakaCategory19,'countHinatazakaCategory20'=>$countHinatazakaCategory20,'countHinatazakaCategory21'=>$countHinatazakaCategory21,'countHinatazakaCategory22'=>$countHinatazakaCategory22,'countHinatazakaCategory23'=>$countHinatazakaCategory23,'countHinatazakaCategory24'=>$countHinatazakaCategory24];
        
        return $param;
    }
}
