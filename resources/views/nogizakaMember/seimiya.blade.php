@extends('layout.nogizaka')

@section('breadcrumbs')
  {{ Breadcrumbs::render('nogizakaSeimiya') }}
@endsection

@section('content')

<!-- トップスクロール -->
<div class="top-scroll-right">
    <img src="{{asset('image/nogizaka/seimiya.png')}}" height="100" width="100">
</div>

<!-- コンテンツ -->
<div class="main-wrapper clearfix">
  @include('main.content')

  @include('main.side',['sakamiti'=>'nogizaka'])
</div>
@endsection