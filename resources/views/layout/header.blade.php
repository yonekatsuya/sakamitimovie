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

    <!-- <input type="text" id="message-flow" placeholder="メッセージを入力する">
    <button id="message-flow-submit">送信</button>
    @if (Auth::check())
      <span>ようこそ、{{$user->name}}さん</span>
    @endif
    @if(isset($loveMemberDispFlag))
      <span>test</span>
    @endif -->
  </p>
  <ul>
    <li id="categorySearchBtn">カテゴリ検索</li>
    <li><a href="{{route('auth.login')}}">ログイン</a></li>
    <li><a href="{{route('auth.logout')}}">ログアウト</a></li>
    <li><a href="{{route('user.index')}}">ユーザー一覧</a></li>
    <li><a href="{{route('user.loveMemberIndex')}}">推しメンで繋がる</a></li>
    <li><a href="{{route('main.chat')}}">チャット</a></li>
    @if(Auth::check())
      <li><a href="javascript:void(0)" class="loveRegister">推しメン登録</a></li>
      <li><a href="{{route('user.logout')}}">ログアウト</a></li>
    @else
      <li><a href="{{route('user.signup')}}">新規登録</a></li>
      <li><a href="{{route('user.signin')}}">ログイン</a></li>
    @endif
    <li>
      @if (Auth::check())
        @if ($user->name === 'yone' && $user->email === 'seiryo.soccer.ky@i.softbank.jp')
          <a href="{{route('getAdmin')}}">管理者ページ</a>
        @endif
      @endif
    </li>
    <!-- <li><i class="fas fa-rss"></i> RSS</li>
    <li><i class="fas fa-rss-square"></i> Feedly</li> -->
  </ul>

  <div id="headerMenuBar">
    <i class="fas fa-bars"></i>
  </div>
</header>