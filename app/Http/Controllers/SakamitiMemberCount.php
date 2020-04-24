<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class SakamitiMemberCount extends Controller
{
    public static function count() {
        $countAkimoto = Article::where('member_name','秋元真夏')->get()->count();
        $countAsuka = Article::where('member_name','齋藤飛鳥')->get()->count();
        $countAyane = Article::where('member_name','鈴木絢音')->get()->count();
        $countHayakawa = Article::where('member_name','早川聖良')->get()->count();
        $countHiguchi = Article::where('member_name','樋口日菜')->get()->count();
        $countHori = Article::where('member_name','堀未央奈')->get()->count();
        $countHoshino = Article::where('member_name','星野みなみ')->get()->count();
        $countIkuta = Article::where('member_name','生田絵梨花')->get()->count();
        $countKaede = Article::where('member_name','佐藤楓')->get()->count();
        $countKakehashi = Article::where('member_name','掛橋沙也加')->get()->count();
        $countKaki = Article::where('member_name','賀喜遥香')->get()->count();
        $countKanagawa = Article::where('member_name','金川沙耶')->get()->count();
        $countKitagawa = Article::where('member_name','北川悠里')->get()->count();
        $countKitano = Article::where('member_name','北野日奈子')->get()->count();
        $countKotoko = Article::where('member_name','佐々木琴子')->get()->count();
        $countMatsumura = Article::where('member_name','松村沙友理')->get()->count();
        $countMiria = Article::where('member_name','渡辺みり愛')->get()->count();
        $countMomoko = Article::where('member_name','大園桃子')->get()->count();
        $countMukai = Article::where('member_name','向井葉月')->get()->count();
        $countNakada = Article::where('member_name','中田花奈')->get()->count();
        $countNakamura = Article::where('member_name','中村麗乃')->get()->count();
        $countRanze = Article::where('member_name','寺田蘭世')->get()->count();
        $countRenka = Article::where('member_name','岩本蓮華')->get()->count();
        $countRiria = Article::where('member_name','伊藤理々杏')->get()->count();
        $countSakaguchi = Article::where('member_name','阪口珠美')->get()->count();
        $countSakura = Article::where('member_name','遠藤さくら')->get()->count();
        $countSayuri = Article::where('member_name','井上小百合')->get()->count();
        $countSeimiya = Article::where('member_name','清宮レイ')->get()->count();
        $countShibata = Article::where('member_name','柴田由那')->get()->count();
        $countShinuchi = Article::where('member_name','新内眞衣')->get()->count();
        $countShiori = Article::where('member_name','久保史緒里')->get()->count();
        $countShiraishi = Article::where('member_name','白石麻衣')->get()->count();
        $countTakayama = Article::where('member_name','高山一実')->get()->count();
        $countTamura = Article::where('member_name','田村保乃')->get()->count();
        $countTsutsui = Article::where('member_name','筒井あやめ')->get()->count();
        $countUmezawa = Article::where('member_name','梅澤美波')->get()->count();
        $countWada = Article::where('member_name','和田まあや')->get()->count();
        $countYakubo = Article::where('member_name','矢久保美緒')->get()->count();
        $countYamasaki = Article::where('member_name','山崎怜奈')->get()->count();
        $countYamashita = Article::where('member_name','山下美月')->get()->count();
        $countYoda = Article::where('member_name','与田祐希')->get()->count();
        $countYoshida = Article::where('member_name','吉田彩乃クリスティー')->get()->count();
        $countZyunna = Article::where('member_name','伊藤純奈')->get()->count();

        $countHabu = Article::where('member_name','土生瑞穂')->get()->count();
        $countHarada = Article::where('member_name','原田葵')->get()->count();
        $countHuziyoshi = Article::where('member_name','藤吉夏鈴')->get()->count();
        $countInoue = Article::where('member_name','井上梨奈')->get()->count();
        $countIshimori = Article::where('member_name','石森虹花')->get()->count();
        $countKobayashi = Article::where('member_name','小林由衣')->get()->count();
        $countKoike = Article::where('member_name','小池美波')->get()->count();
        $countMatsuda = Article::where('member_name','松田里奈')->get()->count();
        $countMatsudaira = Article::where('member_name','松平梨花')->get()->count();
        $countMorita = Article::where('member_name','森田ひかる')->get()->count();
        $countMoriya = Article::where('member_name','守屋茜')->get()->count();
        $countNagasawa = Article::where('member_name','長沢菜々子')->get()->count();
        $countOzeki = Article::where('member_name','尾関梨香')->get()->count();
        $countRika = Article::where('member_name','渡辺梨花')->get()->count();
        $countRisa = Article::where('member_name','渡邊理沙')->get()->count();
        $countKeyakizakaSaito = Article::where('member_name','齋藤冬優花')->get()->count();
        $countSato = Article::where('member_name','佐藤詩織')->get()->count();
        $countSeki = Article::where('member_name','関由美子')->get()->count();
        $countSugai = Article::where('member_name','菅井友香')->get()->count();
        $countTakemoto = Article::where('member_name','武本由依')->get()->count();
        $countKeyakizakaTamura = Article::where('member_name','田村保乃')->get()->count();
        $countTen = Article::where('member_name','山崎天')->get()->count();
        $countUemura = Article::where('member_name','上村梨奈')->get()->count();
        
        $countHamagishi = Article::where('member_name','濱岸ひより')->get()->count();
        $countHigashimura = Article::where('member_name','東村芽衣')->get()->count();
        $countKageyama = Article::where('member_name','影山優佳')->get()->count();
        $countKamimura = Article::where('member_name','上村ひなの')->get()->count();
        $countKanemura = Article::where('member_name','金村美玖')->get()->count();
        $countKato = Article::where('member_name','加藤史帆')->get()->count();
        $countKawata = Article::where('member_name','河田陽菜')->get()->count();
        $countKonoka = Article::where('member_name','松田好花')->get()->count();
        $countKosaka = Article::where('member_name','小坂菜緒')->get()->count();
        $countKumi = Article::where('member_name','佐々木久美')->get()->count();
        $countManamo = Article::where('member_name','宮田愛萌')->get()->count();
        $countMiho = Article::where('member_name','渡邊美穂')->get()->count();
        $countMirei = Article::where('member_name','佐々木美玲')->get()->count();
        $countNibu = Article::where('member_name','丹生明里')->get()->count();
        $countHinatazakaSaito = Article::where('member_name','齊藤京子')->get()->count();
        $countTakamoto = Article::where('member_name','高本彩花')->get()->count();
        $countTakase = Article::where('member_name','高瀬愛奈')->get()->count();
        $countTomita = Article::where('member_name','富田鈴花')->get()->count();
        $countUshio = Article::where('member_name','潮紗理菜')->get()->count();

        $param = ['countAkimoto'=>$countAkimoto,'countAsuka'=>$countAsuka,'countAyane'=>$countAyane,'countHayakawa'=>$countHayakawa,'countHiguchi'=>$countHiguchi,'countHori'=>$countHori,'countHoshino'=>$countHoshino,'countIkuta'=>$countIkuta,'countKaede'=>$countKaede,'countKakehashi'=>$countKakehashi,'countKaki'=>$countKaki,'countKanagawa'=>$countKanagawa,'countKitagawa'=>$countKitagawa,'countKitano'=>$countKitano,'countKotoko'=>$countKotoko,'countMatsumura'=>$countMatsumura,'countMiria'=>$countMiria,'countMomoko'=>$countMomoko,'countMukai'=>$countMukai,'countNakada'=>$countNakada,'countNakamura'=>$countNakamura,'countRanze'=>$countRanze,'countRenka'=>$countRenka,'countRiria'=>$countRiria,'countSakaguchi'=>$countSakaguchi,'countSakura'=>$countSakura,'countSayuri'=>$countSayuri,'countSeimiya'=>$countSeimiya,'countShibata'=>$countShibata,'countShinuchi'=>$countShinuchi,'countShiori'=>$countShiori,'countShiraishi'=>$countShiraishi,'countTakayama'=>$countTakayama,'countTamura'=>$countTamura,'countTsutsui'=>$countTsutsui,'countUmezawa'=>$countUmezawa,'countWada'=>$countWada,'countYakubo'=>$countYakubo,'countYamasaki'=>$countYamasaki,'countYamashita'=>$countYamashita,'countYoda'=>$countYoda,'countYoshida'=>$countYoshida,'countZyunna'=>$countZyunna,'countHabu'=>$countHabu,'countHarada'=>$countHarada,'countHuziyoshi'=>$countHuziyoshi,'countInoue'=>$countInoue,'countIshimori'=>$countIshimori,'countKobayashi'=>$countKobayashi,'countKoike'=>$countKoike,'countMatsuda'=>$countMatsuda,'countMatsudaira'=>$countMatsudaira,'countMorita'=>$countMorita,'countMoriya'=>$countMoriya,'countNagasawa'=>$countNagasawa,'countOzeki'=>$countOzeki,'countRika'=>$countRika,'countRisa'=>$countRisa,'countKeyakizakaSaito'=>$countKeyakizakaSaito,'countSato'=>$countSato,'countSeki'=>$countSeki,'countSugai'=>$countSugai,'countTakemoto'=>$countTakemoto,'countKeyakizakaTamura'=>$countKeyakizakaTamura,'countTen'=>$countTen,'countUemura'=>$countUemura,'countHamagishi'=>$countHamagishi,'countHigashimura'=>$countHigashimura,'countKageyama'=>$countKageyama,'countKamimura'=>$countKamimura,'countKanemura'=>$countKanemura,'countKato'=>$countKato,'countKawata'=>$countKawata,'countKonoka'=>$countKonoka,'countKosaka'=>$countKosaka,'countKumi'=>$countKumi,'countManamo'=>$countManamo,'countMiho'=>$countMiho,'countMirei'=>$countMirei,'countNibu'=>$countNibu,'countHinatazakaSaito'=>$countHinatazakaSaito,'countTakamoto'=>$countTakamoto,'countTakase'=>$countTakase,'countTomita'=>$countTomita,'countUshio'=>$countUshio];
        return $param;
    }
}
