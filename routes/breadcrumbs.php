<?php

Breadcrumbs::for('/', function ($trail) {
  $trail->push('坂道グループ動画館 /', route('top'));
});

Breadcrumbs::for('nogizaka', function ($trail) {
  $trail->parent('/');
  $trail->push('乃木坂動画館 /', route('nogizaka'));
});

Breadcrumbs::for('keyakizaka', function ($trail) {
  $trail->parent('/');
  $trail->push('欅坂動画館 /', route('keyakizaka'));
});

Breadcrumbs::for('hinatazaka', function ($trail) {
  $trail->parent('/');
  $trail->push('日向坂動画館 /', route('hinatazaka'));
});

Breadcrumbs::for('nogizakaAkimoto', function ($trail) {
    $trail->parent('nogizaka');
    $trail->push('秋元真夏', route('nogizakaAkimoto'));
});

Breadcrumbs::for('nogizakaAsuka', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('齋藤飛鳥', route('nogizakaAsuka'));
});

Breadcrumbs::for('nogizakaAyane', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('鈴木絢音', route('nogizakaAsuka'));
});

Breadcrumbs::for('nogizakaSakura', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('遠藤さくら', route('nogizakaSakura'));
});

Breadcrumbs::for('nogizakaHayakawa', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('早川聖良', route('nogizakaHayakawa'));
});

Breadcrumbs::for('nogizakaHiguchi', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('樋口日菜', route('nogizakaHiguchi'));
});

Breadcrumbs::for('nogizakaHori', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('堀未央奈', route('nogizakaHori'));
});

Breadcrumbs::for('nogizakaHoshino', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('星野みなみ', route('nogizakaHoshino'));
});

Breadcrumbs::for('nogizakaIkuta', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('生田絵梨花', route('nogizakaIkuta'));
});

Breadcrumbs::for('nogizakaKaede', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('佐藤楓', route('nogizakaKaede'));
});

Breadcrumbs::for('nogizakaKakehashi', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('掛橋沙也加', route('nogizakaKakehashi'));
});

Breadcrumbs::for('nogizakaKaki', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('賀喜遥香', route('nogizakaKaki'));
});

Breadcrumbs::for('nogizakaKanagawa', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('金川沙耶', route('nogizakaKanagawa'));
});

Breadcrumbs::for('nogizakaKitagawa', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('北川悠里', route('nogizakaKitagawa'));
});

Breadcrumbs::for('nogizakaKitano', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('北野日奈子', route('nogizakaKitano'));
});

Breadcrumbs::for('nogizakaKotoko', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('佐々木琴子', route('nogizakaKotoko'));
});

Breadcrumbs::for('nogizakaShiori', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('久保史緒里', route('nogizakaShiori'));
});

Breadcrumbs::for('nogizakaMatsumura', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('松村沙友理', route('nogizakaMatsumura'));
});

Breadcrumbs::for('nogizakaMomoko', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('大園桃子', route('nogizakaMomoko'));
});

Breadcrumbs::for('nogizakaMukai', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('向井葉月', route('nogizakaMukai'));
});

Breadcrumbs::for('nogizakaNakada', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('中田花奈', route('nogizakaNakada'));
});

Breadcrumbs::for('nogizakaNakamura', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('中村麗乃', route('nogizakaNakamura'));
});

Breadcrumbs::for('nogizakaRanze', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('寺田蘭世', route('nogizakaRanze'));
});

Breadcrumbs::for('nogizakaRenka', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('岩本蓮華', route('nogizakaRenka'));
});

Breadcrumbs::for('nogizakaRiria', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('伊藤理々杏', route('nogizakaRiria'));
});

Breadcrumbs::for('nogizakaSayuri', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('井上小百合', route('nogizakaSayuri'));
});

Breadcrumbs::for('nogizakaSeimiya', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('清宮レイ', route('nogizakaSeimiya'));
});

Breadcrumbs::for('nogizakaShibata', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('柴田由那', route('nogizakaShibata'));
});

Breadcrumbs::for('nogizakaShinuchi', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('新内眞衣', route('nogizakaShinuchi'));
});

Breadcrumbs::for('nogizakaShiraishi', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('白石麻衣', route('nogizakaShiraishi'));
});

Breadcrumbs::for('nogizakaTakayama', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('高山一実', route('nogizakaTakayama'));
});

Breadcrumbs::for('nogizakaSakaguchi', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('阪口珠美', route('nogizakaSakaguchi'));
});

Breadcrumbs::for('nogizakaTamura', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('田村保乃', route('nogizakaTamura'));
});

Breadcrumbs::for('nogizakaTsutsui', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('筒井あやめ', route('nogizakaTsutsui'));
});

Breadcrumbs::for('nogizakaUmezawa', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('梅澤美波', route('nogizakaUmezawa'));
});

Breadcrumbs::for('nogizakaWada', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('和田まあや', route('nogizakaWada'));
});

Breadcrumbs::for('nogizakaMiria', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('渡辺みり愛', route('nogizakaMiria'));
});

Breadcrumbs::for('nogizakaYakubo', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('矢久保美緒', route('nogizakaYakubo'));
});

Breadcrumbs::for('nogizakaYamashita', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('山下美月', route('nogizakaYamashita'));
});

Breadcrumbs::for('nogizakaYamasaki', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('山崎怜奈', route('nogizakaYamasaki'));
});

Breadcrumbs::for('nogizakaYoda', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('与田祐希', route('nogizakaYoda'));
});

Breadcrumbs::for('nogizakaYoshida', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('吉田彩乃クリスティー', route('nogizakaYoshida'));
});

Breadcrumbs::for('nogizakaZyunna', function ($trail) {
  $trail->parent('nogizaka');
  $trail->push('伊藤純奈', route('nogizakaZyunna'));
});






Breadcrumbs::for('keyakizakaHabu', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('土生瑞穂', route('keyakizakaHabu'));
});

Breadcrumbs::for('keyakizakaHarada', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('原田葵', route('keyakizakaHarada'));
});

Breadcrumbs::for('keyakizakaHuziyoshi', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('藤吉夏鈴', route('keyakizakaHuziyoshi'));
});

Breadcrumbs::for('keyakizakaInoue', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('井上梨奈', route('keyakizakaInoue'));
});

Breadcrumbs::for('keyakizakaIshimori', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('石森虹花', route('keyakizakaIshimori'));
});

Breadcrumbs::for('keyakizakaKobayashi', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('小林由依', route('keyakizakaKobayashi'));
});

Breadcrumbs::for('keyakizakaKoike', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('小池美波', route('keyakizakaKoike'));
});

Breadcrumbs::for('keyakizakaMatsuda', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('松田里奈', route('keyakizakaMatsuda'));
});

Breadcrumbs::for('keyakizakaMatsudaira', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('松平梨花', route('keyakizakaMatsudaira'));
});

Breadcrumbs::for('keyakizakaMorita', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('森田ひかる', route('keyakizakaMorita'));
});

Breadcrumbs::for('keyakizakaMoriya', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('守屋茜', route('keyakizakaMoriya'));
});

Breadcrumbs::for('keyakizakaNagasawa', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('長沢菜々子', route('keyakizakaNagasawa'));
});

Breadcrumbs::for('keyakizakaOzeki', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('尾関梨香', route('keyakizakaOzeki'));
});

Breadcrumbs::for('keyakizakaRisa', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('渡邉理佐', route('keyakizakaRisa'));
});

Breadcrumbs::for('keyakizakaSaito', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('齋藤冬優花', route('keyakizakaSaito'));
});

Breadcrumbs::for('keyakizakaSato', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('佐藤詩織', route('keyakizakaSato'));
});

Breadcrumbs::for('keyakizakaSeki', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('関由美子', route('keyakizakaSeki'));
});

Breadcrumbs::for('keyakizakaSugai', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('菅井友香', route('keyakizakaSugai'));
});

Breadcrumbs::for('keyakizakaTakemoto', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('武本由衣', route('keyakizakaTakemoto'));
});

Breadcrumbs::for('keyakizakaTamura', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('田村保乃', route('keyakizakaTamura'));
});

Breadcrumbs::for('keyakizakaUemura', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('上村莉奈', route('keyakizakaUemura'));
});

Breadcrumbs::for('keyakizakaRika', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('渡辺梨花', route('keyakizakaRika'));
});

Breadcrumbs::for('keyakizakaTen', function ($trail) {
  $trail->parent('keyakizaka');
  $trail->push('山崎天', route('keyakizakaTen'));
});




Breadcrumbs::for('hinatazakaHamagishi', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('濱岸ひより', route('hinatazakaHamagishi'));
});

Breadcrumbs::for('hinatazakaHigashimura', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('東村芽衣', route('hinatazakaHigashimura'));
});

Breadcrumbs::for('hinatazakaKageyama', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('影山優佳', route('hinatazakaKageyama'));
});

Breadcrumbs::for('hinatazakaKamimura', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('上村ひなの', route('hinatazakaKamimura'));
});

Breadcrumbs::for('hinatazakaKanemura', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('金村美玖', route('hinatazakaKanemura'));
});

Breadcrumbs::for('hinatazakaKato', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('加藤史帆', route('hinatazakaKato'));
});

Breadcrumbs::for('hinatazakaKawata', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('河田陽菜', route('hinatazakaKawata'));
});

Breadcrumbs::for('hinatazakaKosaka', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('小坂菜緒', route('hinatazakaKosaka'));
});

Breadcrumbs::for('hinatazakaKumi', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('佐々木久美', route('hinatazakaKumi'));
});

Breadcrumbs::for('hinatazakaKonoka', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('松田好花', route('hinatazakaKonoka'));
});

Breadcrumbs::for('hinatazakaMirei', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('佐々木美玲', route('hinatazakaMirei'));
});

Breadcrumbs::for('hinatazakaManamo', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('宮田愛萌', route('hinatazakaManamo'));
});

Breadcrumbs::for('hinatazakaNibu', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('丹生明里', route('hinatazakaNibu'));
});

Breadcrumbs::for('hinatazakaSaito', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('齊藤京子', route('hinatazakaSaito'));
});

Breadcrumbs::for('hinatazakaTakamoto', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('高本彩花', route('hinatazakaTakamoto'));
});

Breadcrumbs::for('hinatazakaTakase', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('高瀬愛奈', route('hinatazakaTakase'));
});

Breadcrumbs::for('hinatazakaTomita', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('富田鈴花', route('hinatazakaTomita'));
});

Breadcrumbs::for('hinatazakaUshio', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('潮紗理菜', route('hinatazakaUshio'));
});

Breadcrumbs::for('hinatazakaMiho', function ($trail) {
  $trail->parent('hinatazaka');
  $trail->push('渡邉美穂', route('hinatazakaMiho'));
});