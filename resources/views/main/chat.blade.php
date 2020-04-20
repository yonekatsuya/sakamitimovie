@extends('layout.index')

@section('content')
<div class="chat-container">
  <div class="chat-area">
    <div class="chat-header">Chat</div>
    <div class="chat-body">
      <div id="comment-data"></div>
    </div>
  </div>
</div>

<form method="post" action="{{route('add')}}">
  @csrf
  <div class="comment-container">
    <div class="comment-area">
      <textarea id="comment" name="comment" placeholder="push message (Shift + Enter)" 
            onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
      <button type="submit" id="submit" class="comment-btn">Submit</button>
    </div>
  </div>
</form>

<script src="{{ asset('js/comment.js') }}"></script>
@endsection