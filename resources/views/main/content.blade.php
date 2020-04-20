<!-- メインコンテンツ -->
<div class="content">
  <div class="row1">
    @if (isset($articles))
      @foreach ($articles as $article)
        <div class="row1-left">
          <div class="row1-left-image row1-image">
            <?= $article->link ?>
          </div>
          <div class="row1-left-content row1-content" style="display:inline-block;">
            <div>
              <p class="calender"><i class="far fa-calendar-alt"></i> {{$article->created_at}}</p>
              <p class="category">{{$article->category}}</p>
              <h2>{{$article->title}}</h2>
              <p>{{$article->description}}</p>
            </div>
          </div>
        </div>
      @endforeach
    @endif
    <div class="content-pagination">
      {{$articles->appends(Request::only('keyword'))->onEachSide(1)->links()}}
    </div>
  </div>
</div>