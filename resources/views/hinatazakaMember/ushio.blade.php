@extends('layout.hinatazaka')

@section('breadcrumbs')
  {{ Breadcrumbs::render('hinatazakaUshio') }}
@endsection

@section('content')

<!-- トップスクロール -->
<div class="top-scroll-right">
    <img src="{{asset('image/hinatazaka/usio.png')}}" height="100" width="100">
</div>

<!-- コンテンツ -->
<div class="main-wrapper clearfix">
  @include('main.content')

  @include('main.side',['sakamiti'=>'hinatazaka'])
</div>
@endsection