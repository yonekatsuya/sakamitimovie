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

  <link rel="stylesheet" href="{{asset('css/sign.css')}}">
</head>
<body>

<div class="signupPage">
  <header class="header">
    <div>ユーザー新規登録</div>
  </header>
  <div class='container'>

    <form class="form mt-5" method="POST" action="{{ route('user.signup') }}">
    @csrf
      <div class="form-group @error('name')has-error @enderror">
        <label>名前</label>
        <input type="text" name="name" class="form-control" placeholder="名前を入力してください">
        @error('name')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror
    </div>

      <div class="form-group @error('email')has-error @enderror">
        <label>メールアドレス</label>
        <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください">
        @error('email')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror
      </div>

      <div class="form-group @error('password')has-error @enderror">
        <label>パスワード</label>
        <em>6文字以上入力してください</em>
        <input type="password" name="password" class="form-control" placeholder="パスワードを入力してください">
        @error('password')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror
      </div>
    </div>

      <div class="text-center">
      <button type="submit" class="btn submitBtn">新規登録</button>
      <div class="linkToLogin">
        <a href="{{ route('user.signin') }}">ログインはこちら</a>
      </div>
      </div>
    </form>
  </div>
</div>


</body>
</html>