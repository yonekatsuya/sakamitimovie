@extends('layout.hinatazaka')

@section('breadcrumbs')
  {{ Breadcrumbs::render('hinatazaka') }}
@endsection

@section('content')

<!-- トップスクロール -->
<div class="top-scroll-right">
    <img src="http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/image/hinatazaka/kosaka.png" height="100" width="100">
</div>

<!-- コンテンツ -->
<div class="main-wrapper clearfix">
  @include('main.content')

  @include('main.side',['sakamiti'=>'hinatazaka'])
</div>
@endsection