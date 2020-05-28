<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoveMember;

class UserLoveMemberCountController extends Controller
{
    public static function count() {
        $countLoveUserAkimoto = LoveMember::where('nogizakaMember','秋元真夏')->get()->count();
        $countLoveUserAsuka = LoveMember::where('nogizakaMember','齋藤飛鳥')->get()->count();
        $countLoveUserAyane = LoveMember::where('nogizakaMember','鈴木絢音')->get()->count();
        $countLoveUserHayakawa = LoveMember::where('nogizakaMember','早川聖良')->get()->count();
        $countLoveUserHiguchi = LoveMember::where('nogizakaMember','樋口日菜')->get()->count();
        $countLoveUserHori = LoveMember::where('nogizakaMember','堀未央奈')->get()->count();
        $countLoveUserHoshino = LoveMember::where('nogizakaMember','星野みなみ')->get()->count();
        $countLoveUserIkuta = LoveMember::where('nogizakaMember','生田絵梨花')->get()->count();
        $countLoveUserKaede = LoveMember::where('nogizakaMember','佐藤楓')->get()->count();
        $countLoveUserKakehashi = LoveMember::where('nogizakaMember','掛橋沙也加')->get()->count();
        $countLoveUserKaki = LoveMember::where('nogizakaMember','賀喜遥香')->get()->count();
        $countLoveUserKanagawa = LoveMember::where('nogizakaMember','金川沙耶')->get()->count();
        $countLoveUserKitagawa = LoveMember::where('nogizakaMember','北川悠里')->get()->count();
        $countLoveUserKitano = LoveMember::where('nogizakaMember','北野日奈子')->get()->count();
        $countLoveUserKotoko = LoveMember::where('nogizakaMember','佐々木琴子')->get()->count();
        $countLoveUserMatsumura = LoveMember::where('nogizakaMember','松村沙友理')->get()->count();
        $countLoveUserMiria = LoveMember::where('nogizakaMember','渡辺みり愛')->get()->count();
        $countLoveUserMomoko = LoveMember::where('nogizakaMember','大園桃子')->get()->count();
        $countLoveUserMukai = LoveMember::where('nogizakaMember','向井葉月')->get()->count();
        $countLoveUserNakada = LoveMember::where('nogizakaMember','中田花奈')->get()->count();
        $countLoveUserNakamura = LoveMember::where('nogizakaMember','中村麗乃')->get()->count();
        $countLoveUserRanze = LoveMember::where('nogizakaMember','寺田蘭世')->get()->count();
        $countLoveUserRenka = LoveMember::where('nogizakaMember','岩本蓮華')->get()->count();
        $countLoveUserRiria = LoveMember::where('nogizakaMember','伊藤理々杏')->get()->count();
        $countLoveUserSakaguchi = LoveMember::where('nogizakaMember','阪口珠美')->get()->count();
        $countLoveUserSakura = LoveMember::where('nogizakaMember','遠藤さくら')->get()->count();
        $countLoveUserSayuri = LoveMember::where('nogizakaMember','井上小百合')->get()->count();
        $countLoveUserSeimiya = LoveMember::where('nogizakaMember','清宮レイ')->get()->count();
        $countLoveUserShibata = LoveMember::where('nogizakaMember','柴田由那')->get()->count();
        $countLoveUserShinuchi = LoveMember::where('nogizakaMember','新内眞衣')->get()->count();
        $countLoveUserShiori = LoveMember::where('nogizakaMember','久保史緒里')->get()->count();
        $countLoveUserShiraishi = LoveMember::where('nogizakaMember','白石麻衣')->get()->count();
        $countLoveUserTakayama = LoveMember::where('nogizakaMember','高山一実')->get()->count();
        $countLoveUserTamura = LoveMember::where('nogizakaMember','田村真佑')->get()->count();
        $countLoveUserTsutsui = LoveMember::where('nogizakaMember','筒井あやめ')->get()->count();
        $countLoveUserUmezawa = LoveMember::where('nogizakaMember','梅澤美波')->get()->count();
        $countLoveUserWada = LoveMember::where('nogizakaMember','和田まあや')->get()->count();
        $countLoveUserYakubo = LoveMember::where('nogizakaMember','矢久保美緒')->get()->count();
        $countLoveUserYamasaki = LoveMember::where('nogizakaMember','山崎怜奈')->get()->count();
        $countLoveUserYamashita = LoveMember::where('nogizakaMember','山下美月')->get()->count();
        $countLoveUserYoda = LoveMember::where('nogizakaMember','与田祐希')->get()->count();
        $countLoveUserYoshida = LoveMember::where('nogizakaMember','吉田彩乃クリスティー')->get()->count();
        $countLoveUserZyunna = LoveMember::where('nogizakaMember','伊藤純奈')->get()->count();

        $countLoveUserKeyakizakaHabu = LoveMember::where('keyakizakaMember','土生瑞穂')->get()->count();
        $countLoveUserKeyakizakaHarada = LoveMember::where('keyakizakaMember','原田葵')->get()->count();
        $countLoveUserKeyakizakaHuziyoshi = LoveMember::where('keyakizakaMember','藤吉夏鈴')->get()->count();
        $countLoveUserKeyakizakaInoue = LoveMember::where('keyakizakaMember','井上梨奈')->get()->count();
        $countLoveUserKeyakizakaIshimori = LoveMember::where('keyakizakaMember','石森虹花')->get()->count();
        $countLoveUserKeyakizakaKobayashi = LoveMember::where('keyakizakaMember','小林由衣')->get()->count();
        $countLoveUserKeyakizakaKoike = LoveMember::where('keyakizakaMember','小池美波')->get()->count();
        $countLoveUserKeyakizakaMatsuda = LoveMember::where('keyakizakaMember','松田里奈')->get()->count();
        $countLoveUserKeyakizakaMatsudaira = LoveMember::where('keyakizakaMember','松平梨花')->get()->count();
        $countLoveUserKeyakizakaMorita = LoveMember::where('keyakizakaMember','森田ひかる')->get()->count();
        $countLoveUserKeyakizakaMoriya = LoveMember::where('keyakizakaMember','守屋茜')->get()->count();
        $countLoveUserKeyakizakaNagasawa = LoveMember::where('keyakizakaMember','長沢菜々子')->get()->count();
        $countLoveUserKeyakizakaOzeki = LoveMember::where('keyakizakaMember','尾関梨香')->get()->count();
        $countLoveUserKeyakizakaRika = LoveMember::where('keyakizakaMember','渡辺梨花')->get()->count();
        $countLoveUserKeyakizakaRisa = LoveMember::where('keyakizakaMember','渡邊理沙')->get()->count();
        $countLoveUserKeyakizakaSaito = LoveMember::where('keyakizakaMember','齋藤冬優花')->get()->count();
        $countLoveUserKeyakizakaSato = LoveMember::where('keyakizakaMember','佐藤詩織')->get()->count();
        $countLoveUserKeyakizakaSeki = LoveMember::where('keyakizakaMember','関由美子')->get()->count();
        $countLoveUserKeyakizakaSugai = LoveMember::where('keyakizakaMember','菅井友香')->get()->count();
        $countLoveUserKeyakizakaTakemoto = LoveMember::where('keyakizakaMember','武本由依')->get()->count();
        $countLoveUserKeyakizakaTamura = LoveMember::where('keyakizakaMember','田村保乃')->get()->count();
        $countLoveUserKeyakizakaTen = LoveMember::where('keyakizakaMember','山崎天')->get()->count();
        $countLoveUserKeyakizakaUemura = LoveMember::where('keyakizakaMember','上村梨奈')->get()->count();

        $countLoveUserHinatazakaHamagishi = LoveMember::where('hinatazakaMember','濱岸ひより')->get()->count();
        $countLoveUserHinatazakaHigashimura = LoveMember::where('hinatazakaMember','東村芽衣')->get()->count();
        $countLoveUserHinatazakaKageyama = LoveMember::where('hinatazakaMember','影山優佳')->get()->count();
        $countLoveUserHinatazakaKamimura = LoveMember::where('hinatazakaMember','上村ひなの')->get()->count();
        $countLoveUserHinatazakaKanemura = LoveMember::where('hinatazakaMember','金村美玖')->get()->count();
        $countLoveUserHinatazakaKato = LoveMember::where('hinatazakaMember','加藤史帆')->get()->count();
        $countLoveUserHinatazakaKawata = LoveMember::where('hinatazakaMember','河田陽奈')->get()->count();
        $countLoveUserHinatazakaKonoka = LoveMember::where('hinatazakaMember','松田好花')->get()->count();
        $countLoveUserHinatazakaKosaka = LoveMember::where('hinatazakaMember','小坂菜緒')->get()->count();
        $countLoveUserHinatazakaKumi = LoveMember::where('hinatazakaMember','佐々木久美')->get()->count();
        $countLoveUserHinatazakaManamo = LoveMember::where('hinatazakaMember','宮田愛萌')->get()->count();
        $countLoveUserHinatazakaMiho = LoveMember::where('hinatazakaMember','渡邉美穂')->get()->count();
        $countLoveUserHinatazakaMirei = LoveMember::where('hinatazakaMember','佐々木美玲')->get()->count();
        $countLoveUserHinatazakaNibu = LoveMember::where('hinatazakaMember','丹生明里')->get()->count();
        $countLoveUserHinatazakaSaito = LoveMember::where('hinatazakaMember','齊藤京子')->get()->count();
        $countLoveUserHinatazakaTakamoto = LoveMember::where('hinatazakaMember','高本彩花')->get()->count();
        $countLoveUserHinatazakaTakase = LoveMember::where('hinatazakaMember','高瀬愛菜')->get()->count();
        $countLoveUserHinatazakaTomita = LoveMember::where('hinatazakaMember','富田鈴花')->get()->count();
        $countLoveUserHinatazakaUshio = LoveMember::where('hinatazakaMember','潮紗理菜')->get()->count();

        $param = ['countLoveUserAkimoto'=>$countLoveUserAkimoto,'countLoveUserAsuka'=>$countLoveUserAsuka,'countLoveUserAyane'=>$countLoveUserAyane,'countLoveUserHayakawa'=>$countLoveUserHayakawa,'countLoveUserHiguchi'=>$countLoveUserHiguchi,'countLoveUserHori'=>$countLoveUserHori,'countLoveUserHoshino'=>$countLoveUserHoshino,'countLoveUserIkuta'=>$countLoveUserIkuta,'countLoveUserKaede'=>$countLoveUserKaede,'countLoveUserKakehashi'=>$countLoveUserKakehashi,'countLoveUserKaki'=>$countLoveUserKaki,'countLoveUserKanagawa'=>$countLoveUserKanagawa,'countLoveUserKitagawa'=>$countLoveUserKitagawa,'countLoveUserKitano'=>$countLoveUserKitano,'countLoveUserKotoko'=>$countLoveUserKotoko,'countLoveUserMatsumura'=>$countLoveUserMatsumura,'countLoveUserMiria'=>$countLoveUserMiria,'countLoveUserMomoko'=>$countLoveUserMomoko,'countLoveUserMukai'=>$countLoveUserMukai,'countLoveUserNakada'=>$countLoveUserNakada,'countLoveUserNakamura'=>$countLoveUserNakamura,'countLoveUserRanze'=>$countLoveUserRanze,'countLoveUserRenka'=>$countLoveUserRenka,'countLoveUserRiria'=>$countLoveUserRiria,'countLoveUserSakaguchi'=>$countLoveUserSakaguchi,'countLoveUserSakura'=>$countLoveUserSakura,'countLoveUserSayuri'=>$countLoveUserSayuri,'countLoveUserSeimiya'=>$countLoveUserSeimiya,'countLoveUserShibata'=>$countLoveUserShibata,'countLoveUserShinuchi'=>$countLoveUserShinuchi,'countLoveUserShiori'=>$countLoveUserShiori,'countLoveUserShiraishi'=>$countLoveUserShiraishi,'countLoveUserTakayama'=>$countLoveUserTakayama,'countLoveUserTamura'=>$countLoveUserTamura,'countLoveUserTsutsui'=>$countLoveUserTsutsui,'countLoveUserUmezawa'=>$countLoveUserUmezawa,'countLoveUserWada'=>$countLoveUserWada,'countLoveUserYakubo'=>$countLoveUserYakubo,'countLoveUserYamasaki'=>$countLoveUserYamasaki,'countLoveUserYamashita'=>$countLoveUserYamashita,'countLoveUserYoda'=>$countLoveUserYoda,'countLoveUserYoshida'=>$countLoveUserYoshida,'countLoveUserZyunna'=>$countLoveUserZyunna,'countLoveUserKeyakizakaHabu'=>$countLoveUserKeyakizakaHabu,'countLoveUserKeyakizakaHarada'=>$countLoveUserKeyakizakaHarada,'countLoveUserKeyakizakaHuziyoshi'=>$countLoveUserKeyakizakaHuziyoshi,'countLoveUserKeyakizakaInoue'=>$countLoveUserKeyakizakaInoue,'countLoveUserKeyakizakaIshimori'=>$countLoveUserKeyakizakaIshimori,'countLoveUserKeyakizakaKobayashi'=>$countLoveUserKeyakizakaKobayashi,'countLoveUserKeyakizakaKoike'=>$countLoveUserKeyakizakaKoike,'countLoveUserKeyakizakaMatsuda'=>$countLoveUserKeyakizakaMatsuda,'countLoveUserKeyakizakaMatsudaira'=>$countLoveUserKeyakizakaMatsudaira,'countLoveUserKeyakizakaMorita'=>$countLoveUserKeyakizakaMorita,'countLoveUserKeyakizakaMoriya'=>$countLoveUserKeyakizakaMoriya,'countLoveUserKeyakizakaNagasawa'=>$countLoveUserKeyakizakaNagasawa,'countLoveUserKeyakizakaOzeki'=>$countLoveUserKeyakizakaOzeki,'countLoveUserKeyakizakaRika'=>$countLoveUserKeyakizakaRika,'countLoveUserKeyakizakaRisa'=>$countLoveUserKeyakizakaRisa,'countLoveUserKeyakizakaSaito'=>$countLoveUserKeyakizakaSaito,'countLoveUserKeyakizakaSato'=>$countLoveUserKeyakizakaSato,'countLoveUserKeyakizakaSeki'=>$countLoveUserKeyakizakaSeki,'countLoveUserKeyakizakaSugai'=>$countLoveUserKeyakizakaSugai,'countLoveUserKeyakizakaTakemoto'=>$countLoveUserKeyakizakaTakemoto,'countLoveUserKeyakizakaTamura'=>$countLoveUserKeyakizakaTamura,'countLoveUserKeyakizakaTen'=>$countLoveUserKeyakizakaTen,'countLoveUserKeyakizakaUemura'=>$countLoveUserKeyakizakaUemura,'countLoveUserHinatazakaHamagishi'=>$countLoveUserHinatazakaHamagishi,'countLoveUserHinatazakaHigashimura'=>$countLoveUserHinatazakaHigashimura,'countLoveUserHinatazakaKageyama'=>$countLoveUserHinatazakaKageyama,'countLoveUserHinatazakaKamimura'=>$countLoveUserHinatazakaKamimura,'countLoveUserHinatazakaKanemura'=>$countLoveUserHinatazakaKanemura,'countLoveUserHinatazakaKato'=>$countLoveUserHinatazakaKato,'countLoveUserHinatazakaKawata'=>$countLoveUserHinatazakaKawata,'countLoveUserHinatazakaKonoka'=>$countLoveUserHinatazakaKonoka,'countLoveUserHinatazakaKosaka'=>$countLoveUserHinatazakaKosaka,'countLoveUserHinatazakaKumi'=>$countLoveUserHinatazakaKumi,'countLoveUserHinatazakaManamo'=>$countLoveUserHinatazakaManamo,'countLoveUserHinatazakaMiho'=>$countLoveUserHinatazakaMiho,'countLoveUserHinatazakaMirei'=>$countLoveUserHinatazakaMirei,'countLoveUserHinatazakaNibu'=>$countLoveUserHinatazakaNibu,'countLoveUserHinatazakaSaito'=>$countLoveUserHinatazakaSaito,'countLoveUserHinatazakaTakamoto'=>$countLoveUserHinatazakaTakamoto,'countLoveUserHinatazakaTakase'=>$countLoveUserHinatazakaTakase,'countLoveUserHinatazakaTomita'=>$countLoveUserHinatazakaTomita,'countLoveUserHinatazakaUshio'=>$countLoveUserHinatazakaUshio];
        return $param;
    }
}
