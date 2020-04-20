@include('layout.searchbox')

@include('layout.categorySearch')

@include('layout.navMenu')

<!-- サイドコンテンツ（仮） -->
<div class="side">
  <form class="sideForm nonResponsiveSideForm" method="post" action="http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/search">
    @csrf
    <div class="sideFormArea">
      @if (isset($keyword))
        <input class="sideInput" type="text" name="keyword" value="<?= $keyword ?>" placeholder="検索キーワードを入力する">
        <input type="hidden" name="{{$sakamiti}}">
      @else
        <input class="sideInput" type="text" name="keyword" placeholder="検索キーワードを入力する">
        <input type="hidden" name="{{$sakamiti}}">
      @endif
      <div class="sideSubmitArea">
        <button class="sideSubmit" type="submit">検索</button>
      </div>
    </div>
  </form>

<?php define('NogizakaUrl','http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/') ?>

  <div class="side-title">メンバー別動画</div>

  <div class="side-nogizaka">
    <div class="side-nogizaka-title">乃木坂46メンバー</div>
    <div class="side-nogizaka-list">
      <ul>
        <li><a href="{{NogizakaUrl}}nogizakaAkimoto">秋元真夏({{$countAkimoto}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaAsuka">齋藤飛鳥({{$countAsuka}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaAyane">鈴木絢音({{$countAyane}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaSakura">遠藤さくら({{$countSakura}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaHayakawa">早川聖良({{$countHayakawa}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaHiguchi">樋口日菜({{$countHiguchi}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaHori">堀未央奈({{$countHori}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaHoshino">星野みなみ({{$countHoshino}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaIkuta">生田絵梨花({{$countIkuta}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaKaede">佐藤楓({{$countKaede}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaKakehashi">掛橋沙也加({{$countKakehashi}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaKaki">賀喜遥香({{$countKaki}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaKanagawa">金川沙耶({{$countKanagawa}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaKitagawa">北川悠里({{$countKitagawa}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaKitano">北野日奈子({{$countKitano}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaKotoko">佐々木琴子({{$countKotoko}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaShiori">久保史緒里({{$countShiori}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaMatsumura">松村沙友理({{$countMatsumura}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaMomoko">大園桃子({{$countMomoko}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaMukai">向井葉月({{$countMukai}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaNakada">中田花奈({{$countNakada}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaNakamura">中村麗乃({{$countNakamura}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaRanze">寺田蘭世({{$countRanze}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaRenka">岩本蓮華({{$countRenka}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaRiria">伊藤理々杏({{$countRiria}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaSayuri">井上小百合({{$countSayuri}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaSeimiya">清宮レイ({{$countSeimiya}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaShibata">柴田由那({{$countShibata}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaShinuchi">新内眞衣({{$countShinuchi}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaShiraishi">白石麻衣({{$countShiraishi}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaTakayama">高山一実({{$countTakayama}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaSakaguchi">阪口珠実({{$countSakaguchi}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaTamura">田村真佑({{$countTamura}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaTsutsui">筒井あやめ({{$countTsutsui}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaUmezawa">梅澤美波({{$countUmezawa}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaWada">和田まあや({{$countWada}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaMiria">渡辺みり愛({{$countMiria}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaYakubo">矢久保美緒({{$countYakubo}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaYamashita">山下美月({{$countYamashita}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaYamasaki">山崎怜奈({{$countYamasaki}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaYoda">与田祐希({{$countYoda}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaYoshida">吉田彩乃クリスティー({{$countYoshida}})</a></li>
        <li><a href="{{NogizakaUrl}}nogizakaZyunna">伊藤純奈({{$countZyunna}})</a></li>
      </ul>
    </div>
  </div>

  <?php define('KeyakizakaUrl','http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/') ?>

  <div class="side-keyakizaka">
    <div class="side-keyakizaka-title">欅坂46メンバー</div>
    <div class="side-keyakizaka-list">
      <ul>
        <li><a href="{{KeyakizakaUrl}}keyakizakaHabu">土生瑞穂({{$countHabu}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaHarada">原田葵({{$countHarada}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaHuziyoshi">藤吉夏鈴({{$countHuziyoshi}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaInoue">井上梨奈({{$countInoue}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaIshimori">石森虹花({{$countIshimori}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaKobayashi">小林由衣({{$countKobayashi}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaKoike">小池美波({{$countKoike}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaMatsuda">松田里奈({{$countMatsuda}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaMatsudaira">松平梨花({{$countMatsudaira}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaMorita">森田ひかる({{$countMorita}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaMoriya">守屋茜({{$countMoriya}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaNagasawa">長沢菜々子({{$countNagasawa}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaOzeki">尾関梨香({{$countOzeki}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaRisa">渡邊理沙({{$countRisa}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaSaito">齋藤冬優花({{$countKeyakizakaSaito}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaSato">佐藤詩織({{$countSato}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaSeki">関由美子({{$countSeki}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaSugai">菅井友香({{$countSugai}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaTakemoto">武本由依({{$countTakemoto}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaTamura">田村保乃({{$countKeyakizakaTamura}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaUemura">上村梨奈({{$countUemura}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaRika">渡辺梨花({{$countRika}})</a></li>
        <li><a href="{{KeyakizakaUrl}}keyakizakaTen">山崎天({{$countTen}})</a></li>
      </ul>
    </div>
  </div>

  <?php define('HinatazakaUrl','http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/') ?>

  <div class="side-hinatazaka">
    <div class="side-hinatazaka-title">日向坂46メンバー</div>
    <div class="side-hinatazaka-list">
      <ul>
        <li><a href="{{HinatazakaUrl}}hinatazakaHamagishi">濱岸ひより({{$countHamagishi}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaHigashimura">東村芽衣({{$countHigashimura}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKageyama">影山優佳({{$countKageyama}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKamimura">上村ひなの({{$countKamimura}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKanemura">金村美玖({{$countKanemura}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKato">加藤史帆({{$countKato}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKawata">河田陽菜({{$countKawata}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKosaka">小坂菜緒({{$countKosaka}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKumi">佐々木久美({{$countKumi}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaKonoka">松田好花({{$countKonoka}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaMirei">佐々木美玲({{$countMirei}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaManamo">宮田愛萌({{$countManamo}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaNibu">丹生明里({{$countNibu}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaSaito">齊藤京子({{$countHinatazakaSaito}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaTakamoto">高本彩花({{$countTakamoto}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaTakase">高瀬愛奈({{$countTakase}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaTomita">富田鈴花({{$countTomita}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaUshio">潮紗理菜({{$countUshio}})</a></li>
        <li><a href="{{HinatazakaUrl}}hinatazakaMiho">渡邉美穂({{$countMiho}})</a></li>
      </ul>
    </div>
  </div>

  <a class="twitter-timeline" data-lang="ja" data-height="1000" data-theme="dark" href="https://twitter.com/yone_sakamiti?ref_src=twsrc%5Etfw">Tweets by yone_sakamiti</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>