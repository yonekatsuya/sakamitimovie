<form id="modalSideForm" class="sideForm" method="post" action="{{route('postSearch')}}">
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