@extends('layout.hinatazaka')

@section('breadcrumbs')
  {{ Breadcrumbs::render('hinatazaka') }}
@endsection

@section('content')

<form class="sideForm responsiveSideForm" method="post" action="{{route('postSearch')}}">
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

<!-- トップスクロール -->
<div class="top-scroll-right">
    <img src="{{asset('image/hinatazaka/kosaka.png')}}" height="100" width="100">
</div>

<!-- コンテンツ -->
<div class="main-wrapper clearfix">
  @include('main.content')

  @include('main.side',['sakamiti'=>'hinatazaka'])
</div>
@endsection