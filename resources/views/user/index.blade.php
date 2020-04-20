@extends('layout.index')

@section('content')
  <ul>
    @foreach($users as $userItem)
      @if($user->id === $userItem->id)
        <li><a href="{{route('user.show',[$userItem->id])}}">{{$userItem->name}}</a><a href="{{route('user.edit',[$userItem->id])}}">編集</a></li>
      @else
        <li><a href="{{route('user.show',[$userItem->id])}}">{{$userItem->name}}</a></li>
      @endif
    @endforeach
  </ul>
@endsection