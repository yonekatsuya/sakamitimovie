<form id="modalSideForm" class="sideForm" method="post" action="http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/search">
    @csrf
    <div class="sideFormArea">
      @if (isset($keyword))
        <input class="sideInput modalSideInput" type="text" name="keyword" value="<?= $keyword ?>" placeholder="検索キーワードを入力する">
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