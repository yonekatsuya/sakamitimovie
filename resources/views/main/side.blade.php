<!-- @include('layout.searchbox') -->

@include('layout.categorySearch')

@include('layout.navMenu')

@include('layout.userIndex')

@include('layout.userLoveMemberIndex')

<!-- サイドコンテンツ（仮） -->
<div class="side">
  <form class="sideForm nonResponsiveSideForm" method="post" action="{{route('postSearch')}}">
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

  <div class="side-title">メンバー別動画</div>

  <div class="side-nogizaka">
    <div class="side-nogizaka-title"><span>&rsaquo;</span> 乃木坂46メンバー <span>&lsaquo;</span></div>
    <div class="side-nogizaka-list">
      <ul>
        <li><a href="{{route('nogizakaAkimoto')}}">秋元真夏({{$countAkimoto}})</a></li>
        <li><a href="{{route('nogizakaAsuka')}}">齋藤飛鳥({{$countAsuka}})</a></li>
        <li><a href="{{route('nogizakaAyane')}}">鈴木絢音({{$countAyane}})</a></li>
        <li><a href="{{route('nogizakaSakura')}}">遠藤さくら({{$countSakura}})</a></li>
        <li><a href="{{route('nogizakaHayakawa')}}">早川聖良({{$countHayakawa}})</a></li>
        <li><a href="{{route('nogizakaHiguchi')}}">樋口日菜({{$countHiguchi}})</a></li>
        <li><a href="{{route('nogizakaHori')}}">堀未央奈({{$countHori}})</a></li>
        <li><a href="{{route('nogizakaHoshino')}}">星野みなみ({{$countHoshino}})</a></li>
        <li><a href="{{route('nogizakaIkuta')}}">生田絵梨花({{$countIkuta}})</a></li>
        <li><a href="{{route('nogizakaKaede')}}">佐藤楓({{$countKaede}})</a></li>
        <li><a href="{{route('nogizakaKakehashi')}}">掛橋沙也加({{$countKakehashi}})</a></li>
        <li><a href="{{route('nogizakaKaki')}}">賀喜遥香({{$countKaki}})</a></li>
        <li><a href="{{route('nogizakaKanagawa')}}">金川沙耶({{$countKanagawa}})</a></li>
        <li><a href="{{route('nogizakaKitagawa')}}">北川悠里({{$countKitagawa}})</a></li>
        <li><a href="{{route('nogizakaKitano')}}">北野日奈子({{$countKitano}})</a></li>
        <li><a href="{{route('nogizakaKotoko')}}">佐々木琴子({{$countKotoko}})</a></li>
        <li><a href="{{route('nogizakaShiori')}}">久保史緒里({{$countShiori}})</a></li>
        <li><a href="{{route('nogizakaMatsumura')}}">松村沙友理({{$countMatsumura}})</a></li>
        <li><a href="{{route('nogizakaMomoko')}}">大園桃子({{$countMomoko}})</a></li>
        <li><a href="{{route('nogizakaMukai')}}">向井葉月({{$countMukai}})</a></li>
        <li><a href="{{route('nogizakaNakada')}}">中田花奈({{$countNakada}})</a></li>
        <li><a href="{{route('nogizakaNakamura')}}">中村麗乃({{$countNakamura}})</a></li>
        <li><a href="{{route('nogizakaRanze')}}">寺田蘭世({{$countRanze}})</a></li>
        <li><a href="{{route('nogizakaRenka')}}">岩本蓮華({{$countRenka}})</a></li>
        <li><a href="{{route('nogizakaRiria')}}">伊藤理々杏({{$countRiria}})</a></li>
        <li><a href="{{route('nogizakaSayuri')}}">井上小百合({{$countSayuri}})</a></li>
        <li><a href="{{route('nogizakaSeimiya')}}">清宮レイ({{$countSeimiya}})</a></li>
        <li><a href="{{route('nogizakaShibata')}}">柴田由那({{$countShibata}})</a></li>
        <li><a href="{{route('nogizakaShinuchi')}}">新内眞衣({{$countShinuchi}})</a></li>
        <li><a href="{{route('nogizakaShiraishi')}}">白石麻衣({{$countShiraishi}})</a></li>
        <li><a href="{{route('nogizakaTakayama')}}">高山一実({{$countTakayama}})</a></li>
        <li><a href="{{route('nogizakaSakaguchi')}}">阪口珠美({{$countSakaguchi}})</a></li>
        <li><a href="{{route('nogizakaTamura')}}">田村真佑({{$countTamura}})</a></li>
        <li><a href="{{route('nogizakaTsutsui')}}">筒井あやめ({{$countTsutsui}})</a></li>
        <li><a href="{{route('nogizakaUmezawa')}}">梅澤美波({{$countUmezawa}})</a></li>
        <li><a href="{{route('nogizakaWada')}}">和田まあや({{$countWada}})</a></li>
        <li><a href="{{route('nogizakaMiria')}}">渡辺みり愛({{$countMiria}})</a></li>
        <li><a href="{{route('nogizakaYakubo')}}">矢久保美緒({{$countYakubo}})</a></li>
        <li><a href="{{route('nogizakaYamashita')}}">山下美月({{$countYamashita}})</a></li>
        <li><a href="{{route('nogizakaYamasaki')}}">山崎怜奈({{$countYamasaki}})</a></li>
        <li><a href="{{route('nogizakaYoda')}}">与田祐希({{$countYoda}})</a></li>
        <li><a href="{{route('nogizakaYoshida')}}">吉田彩乃クリスティー({{$countYoshida}})</a></li>
        <li><a href="{{route('nogizakaZyunna')}}">伊藤純奈({{$countZyunna}})</a></li>
      </ul>
    </div>
  </div>

  <div class="side-keyakizaka">
    <div class="side-keyakizaka-title"><span>&rsaquo;</span> 欅坂46メンバー <span>&lsaquo;</span></div>
    <div class="side-keyakizaka-list">
      <ul>
        <li><a href="{{route('keyakizakaHabu')}}">土生瑞穂({{$countHabu}})</a></li>
        <li><a href="{{route('keyakizakaHarada')}}">原田葵({{$countHarada}})</a></li>
        <li><a href="{{route('keyakizakaHuziyoshi')}}">藤吉夏鈴({{$countHuziyoshi}})</a></li>
        <li><a href="{{route('keyakizakaInoue')}}">井上梨奈({{$countInoue}})</a></li>
        <li><a href="{{route('keyakizakaIshimori')}}">石森虹花({{$countIshimori}})</a></li>
        <li><a href="{{route('keyakizakaKobayashi')}}">小林由衣({{$countKobayashi}})</a></li>
        <li><a href="{{route('keyakizakaKoike')}}">小池美波({{$countKoike}})</a></li>
        <li><a href="{{route('keyakizakaMatsuda')}}">松田里奈({{$countMatsuda}})</a></li>
        <li><a href="{{route('keyakizakaMatsudaira')}}">松平梨花({{$countMatsudaira}})</a></li>
        <li><a href="{{route('keyakizakaMorita')}}">森田ひかる({{$countMorita}})</a></li>
        <li><a href="{{route('keyakizakaMoriya')}}">守屋茜({{$countMoriya}})</a></li>
        <li><a href="{{route('keyakizakaNagasawa')}}">長沢菜々子({{$countNagasawa}})</a></li>
        <li><a href="{{route('keyakizakaOzeki')}}">尾関梨香({{$countOzeki}})</a></li>
        <li><a href="{{route('keyakizakaRisa')}}">渡邊理沙({{$countRisa}})</a></li>
        <li><a href="{{route('keyakizakaSaito')}}">齋藤冬優花({{$countKeyakizakaSaito}})</a></li>
        <li><a href="{{route('keyakizakaSato')}}">佐藤詩織({{$countSato}})</a></li>
        <li><a href="{{route('keyakizakaSeki')}}">関由美子({{$countSeki}})</a></li>
        <li><a href="{{route('keyakizakaSugai')}}">菅井友香({{$countSugai}})</a></li>
        <li><a href="{{route('keyakizakaTakemoto')}}">武本由依({{$countTakemoto}})</a></li>
        <li><a href="{{route('keyakizakaTamura')}}">田村保乃({{$countKeyakizakaTamura}})</a></li>
        <li><a href="{{route('keyakizakaUemura')}}">上村梨奈({{$countUemura}})</a></li>
        <li><a href="{{route('keyakizakaRika')}}">渡辺梨花({{$countRika}})</a></li>
        <li><a href="{{route('keyakizakaTen')}}">山崎天({{$countTen}})</a></li>
      </ul>
    </div>
  </div>

  <div class="side-hinatazaka">
    <div class="side-hinatazaka-title"><span>&rsaquo;</span> 日向坂46メンバー <span>&lsaquo;</span></div>
    <div class="side-hinatazaka-list">
      <ul>
        <li><a href="{{route('hinatazakaHamagishi')}}">濱岸ひより({{$countHamagishi}})</a></li>
        <li><a href="{{route('hinatazakaHigashimura')}}">東村芽衣({{$countHigashimura}})</a></li>
        <li><a href="{{route('hinatazakaKageyama')}}">影山優佳({{$countKageyama}})</a></li>
        <li><a href="{{route('hinatazakaKamimura')}}">上村ひなの({{$countKamimura}})</a></li>
        <li><a href="{{route('hinatazakaKanemura')}}">金村美玖({{$countKanemura}})</a></li>
        <li><a href="{{route('hinatazakaKato')}}">加藤史帆({{$countKato}})</a></li>
        <li><a href="{{route('hinatazakaKawata')}}">河田陽菜({{$countKawata}})</a></li>
        <li><a href="{{route('hinatazakaKosaka')}}">小坂菜緒({{$countKosaka}})</a></li>
        <li><a href="{{route('hinatazakaKumi')}}">佐々木久美({{$countKumi}})</a></li>
        <li><a href="{{route('hinatazakaKonoka')}}">松田好花({{$countKonoka}})</a></li>
        <li><a href="{{route('hinatazakaMirei')}}">佐々木美玲({{$countMirei}})</a></li>
        <li><a href="{{route('hinatazakaManamo')}}">宮田愛萌({{$countManamo}})</a></li>
        <li><a href="{{route('hinatazakaNibu')}}">丹生明里({{$countNibu}})</a></li>
        <li><a href="{{route('hinatazakaSaito')}}">齊藤京子({{$countHinatazakaSaito}})</a></li>
        <li><a href="{{route('hinatazakaTakamoto')}}">高本彩花({{$countTakamoto}})</a></li>
        <li><a href="{{route('hinatazakaTakase')}}">高瀬愛奈({{$countTakase}})</a></li>
        <li><a href="{{route('hinatazakaTomita')}}">富田鈴花({{$countTomita}})</a></li>
        <li><a href="{{route('hinatazakaUshio')}}">潮紗理菜({{$countUshio}})</a></li>
        <li><a href="{{route('hinatazakaMiho')}}">渡邉美穂({{$countMiho}})</a></li>
      </ul>
    </div>
  </div>

  <a class="twitter-timeline" data-lang="ja" data-height="1000" data-theme="dark" href="https://twitter.com/sakamitimovie?ref_src=twsrc%5Etfw">Tweets by sakamitimovie</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  @include('layout.sideCategory')
</div>