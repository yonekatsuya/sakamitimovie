<div class="userIndex">
  <div class="userIndexModal">
  <div class="userIndexClose">×</div>
    <div class="userIndexTitle">
      <p>ログインしたことのあるユーザー一覧</p>
    </div>
    <div class="userIndexContent">
      <div class="userIndexContentFlex">
        @foreach($users as $user)
          <div class="userIndexContentItem">
            <div class="userIndexContentItemTopWrapper">
              <div class="userIndexContentItemTopLeft">
                <img src="{{$user->avatar}}">
              </div>
              <div class="userIndexContentItemTopCenter">
                <p class="userIndexContentItemName">{{$user->name}}</p>
                <p class="userIndexContentItemNickName"><span>@</span>{{$user->nickname}}</p>
                <p class="userIndexContentItemLocation"><i class="fas fa-map-marker-alt"></i>{{$user->location}}</p>
              </div>
              <div class="userIndexContentItemTopRight">
                <p class="userIndexContentItemProfile"><a href="https://twitter.com/{{$user->nickname}}" target="_blank">プロフィール</a></p>
              </div>
            </div>
            <div class="userIndexContentItemMiddleWrapper">
              <div class="userIndexContentItemFriendsCount"><p>フォロー数</p><p>{{$user->friends_count}}</p></div>
              <div class="userIndexContentItemFollowersCount"><p>フォロワー数</p><p>{{$user->followers_count}}</p></div>
              <div class="userIndexContentItemFavouritesCount"><p>いいね数</p><p>{{$user->favourites_count}}</p></div>
            </div>
            <div class="userIndexContentItemBottomWrapper">
              <p class="userIndexContentItemDescription">{{$user->description}}</p>
            </div>
          </div>
        @endforeach
      </div>
      <!-- <ul>
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
      </ul> -->
    </div>
  </div>
</div>