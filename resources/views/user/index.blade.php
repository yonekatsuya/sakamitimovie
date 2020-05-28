  <ul>
    @foreach($users as $user)
      <li>{{$user->nickname}}</li>
      <li>{{$user->name}}</li>
      <li>{{$user->followers_count}}</li>
      <li>{{$user->friends_count}}</li>
      <li>{{$user->favourites_count}}</li>

      @if(strlen($user->location))
        <li>{{$user->location}}</li>
      @endif

      @if(strlen($user->description))
        <li>{{$user->description}}</li>
      @endif

      @isset($user->loveMember->nogizakaMember)
        <li>乃木坂の推しメン: {{$user->loveMember->nogizakaMember}}</li>
      @endisset

      @isset($user->loveMember->keyakizakaMember)
        <li>欅坂の推しメン: {{$user->loveMember->keyakizakaMember}}</li>
      @endisset

      @isset($user->loveMember->hinatazakaMember)
        <li>日向坂の推しメン: {{$user->loveMember->hinatazakaMember}}</li>
      @endisset

      <li><img src="{{$user->avatar}}"></li>
      <li><a href="https://twitter.com/{{$user->nickname}}" target="_blank">プロフィール</a></li>
    @endforeach
  </ul>