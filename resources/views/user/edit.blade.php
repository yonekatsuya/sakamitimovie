@extends('layout.index')

@section('content')
  <form method="post" action="{{route('user.update')}}">
    @csrf
    <input type="hidden" name="id" value="{{$editUser->id}}">
    name: <input type="text" name="name" placeholder="名前を変更" value="{{$editUser->name}}"><br>
    email: <input type="text" name="email" placeholder="メールアドレスを変更" value="{{$editUser->email}}"><br>
    password: <input type="password" name="password" placeholder="パスワードを入力"><br>
    <input type="submit" name="submit" value="送信">
  </form>
@endsection