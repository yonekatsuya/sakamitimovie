<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/sign.css')}}">
</head>
<body>




<div class='signinPage'>
  <div class='container'>
    <div class='userIcon'>
      <i class="fas fa-user fa-3x"></i>
    </div>
    <h2 class="title">ログイン</h2>
    <form class="form" method="POST" action="{{ route('user.signin') }}">
    @csrf
      <div class="form-group @error('email')has-error @enderror">
      <label>メールアドレス</label>
        <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
        @error('email')
        <span class="errorMessage">
          {{ $message }}
        </span>
        @enderror
      </div>

      <div class="form-group @error('password')has-error @enderror">
        <label>パスワード</label>
        <input type="password" name="password" class="form-control" placeholder="パスワードを入力してください">
        @error('password')
        <span class="errorMessage">
          {{ $message }}
        </span>
        @enderror
      </div>

      <div class="form-group text-center">
      <button type="submit" class="loginBtn">ログイン</button>
      </div>
      <div class="linkToLogin">
        <a href="{{ route('user.signup') }}">新規登録はこちら</a>
      </div>
    </form>
  </div>
</div>


</body>
</html>