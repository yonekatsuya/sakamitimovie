<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/layout.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/chat.css')}}">
  <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
  <script src="{{asset('/js/main.js')}}"></script>
</head>
<body>
  <div class="wrap">
    @if (isset($loveMemberDispFlag))
      <input type="hidden" id="loveMemberDisp" value="">
    @endif

    @include('layout.header')

    @include('layout.mainTitle',['groupName'=>'坂道グループ','url'=>'top'])
    
    @include('layout.nav')

    @include('layout.sideMenu')

    @include('layout.menuContent')
    @include('layout.responsiveMenuContent')

    @yield('breadcrumbs')

    @yield('content')

    @include('layout.modal')

    @include('layout.footer')
  </div>
</body>
</html>