<ul>
  @foreach($userArray as $userItem)
    @if ($user->name !== $userItem[0])
      <li>{{$userItem[0]}}</li>
    @endif
  @endforeach
</ul>