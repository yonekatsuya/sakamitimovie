<div class="headerNavMenuContent">
  <div class="headerNavMenuContentModal">
    <div class="close"><span>×</span></div>
    <div class="item"><p id="categorySearchBtn">カテゴリ検索</p></div>
    <div class="item"><p class="sideMenuDisp">メンバー別動画</p></div>
    <div class="item"><a href="{{route('user.index')}}">ユーザー一覧</a></div>
    <div class="item"><a href="{{route('user.loveMemberIndex')}}">推しメンで繋がる</a></div>
    <div class="item"><a href="{{route('main.chat')}}">チャット</a></div>
    @if(Auth::check())
      <div class="item"><a href="javascript:void(0)" class="loveRegister">推しメン登録</a></div>
      <div class="item"><a href="{{route('user.logout')}}">ログアウト</a></div>
      @if ($user->name === 'yone' && $user->email === 'seiryo.soccer.ky@i.softbank.jp')
        <div class="item"><a href="http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/admin">管理者ページ</a></div>
      @endif
    @else
      <div class="item"><a href="{{route('user.signup')}}">新規登録</a></div>
      <div class="item"><a href="{{route('user.signin')}}">ログイン</a></div>
    @endif
  </div>
</div>