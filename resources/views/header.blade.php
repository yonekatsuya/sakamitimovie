<header class="header clearfix">
  <p>
    @if(isset($count))
      このサイトへのアクセス数：
      @foreach($count as $value)
        @if($loop->last)
          <span class="count-up">{{$value->id}}</span>
        @endif
      @endforeach
          </span>回
    @endif
  </p>
  <ul>
    <li id="categorySearchBtn">カテゴリ検索</li>
    <li id="userIndex">ユーザー一覧</li>
    <li id="userLoveMemberIndex">推しメンで繋がる</li>
    @if(Auth::check())
      <li><a href="javascript:void(0)" class="loveRegister">推しメン登録</a></li>
      <li><a href="{{route('auth.logout')}}">ログアウト</a></li>
      @if(Auth::user()->id === '1079030440323833857' || Auth::user()->id === '1253962680781557761' || Auth::user()->id === '1255505477963841536')
        <li><a href="{{route('getAdmin')}}">管理者ページ</a></li>
      @endif
    @else
      <li><a href="{{route('auth.login')}}">登録/ログイン</a></li>
    @endif
  </ul>

  <div id="headerMenuBar">
    <i class="fas fa-bars"></i>
  </div>
</header>