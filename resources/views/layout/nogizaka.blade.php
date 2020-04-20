<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/layout.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/chat.css')}}">
  <script src="{{asset('/js/main.js')}}"></script>
</head>
<body>

  @include('layout.header')

  @include('layout.mainTitle',['groupName'=>'乃木坂46','url'=>'nogizaka'])
  
  @include('layout.nav')

  @include('layout.sideMenu')
  <div id="flow" style="position:fixed;top:5%;left:-30%;color:red;font-weight:bold;"></div>

  @include('layout.menuContent')

  @yield('breadcrumbs')

  @yield('content')

  @include('layout.modal')

  @include('layout.footer')
</body>
</html>