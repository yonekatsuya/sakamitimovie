@extends('layout.keyakizaka')

@section('breadcrumbs')
  {{ Breadcrumbs::render('keyakizakaKoike') }}
@endsection

@section('content')

<!-- トップスクロール -->
<div class="top-scroll-right">
    <img src="{{asset('image/keyakizaka/koike.png')}}" height="100" width="100">
</div>

<!-- コンテンツ -->
<div class="main-wrapper clearfix">
  @include('main.content')

  @include('main.side',['sakamiti'=>'keyakizaka'])
</div>
@endsection