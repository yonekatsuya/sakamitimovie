@extends('layout.admin')

@section('content')

<form method="post" action="">
  @csrf
  タイトル<input type="text" name="title" style="width: 600px;"><br>
  YouTubeリンク<textarea type="text" name="link" style="height:300px;width:600px;"></textarea><br>
  カテゴリー<input type="text" name="category"><br>
  メンバー名<input type="text" name="member_name"><br>
  <input type="submit" name="submit" value="登録する">
</form>

<br><br>
<input type="text" id="videoId">
<button>送信する</button>


<script>
  $(function(){
    $('button').on('click',function() {
      $.ajax({
        type: 'get',
        url: 'https://www.googleapis.com/youtube/v3/playlistItems', // リクエストURL
        dataType: 'json',
        data: {
          part: 'snippet', // partは必須で指定が必要とのこと。レスポンスで返してもらいたいデータをカンマ区切りで指定する。snippetがあればとりあえず動画を再生するレスポンスが受け取れる。
          playlistId: $('#videoId').val(), // 再生リストID
          maxResults: 50, // 最大件数が50件
          key: 'AIzaSyD9RjianGovG_qM4lIQ6D8EByzF7sg6Ldw'
        }
      }).done(function(response) {
        console.log(response);
        // 成功
        for ($i=0;$i<response.items.length;$i++) {
          $link = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'+ response.items[$i].snippet.resourceId.videoId +'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
          $description = response.items[$i].snippet.description;
          $title = response.items[$i].snippet.title;
          console.log('start');
          $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            type: 'POST',
            url: 'http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/admin',
            data: {
              title: $title,
              link: $link,
              category: '日向坂46',
              category_search: '日向坂スナック真緒',
              member_name: '',
              description: $description
            },
          }).done(function() {
            console.log('success');
          }).fail(function() {
            console.log('second error');
          });
        }
      }).fail(function() {
        // エラー
        console.log('first error');
      });
    });
  });
</script>

@endsection