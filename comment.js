$(function() {
  get_data();
});

function get_data() {
  $.ajax({
    url: 'http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/result',
    dataType: 'json'
  }).done(function(data) {
    $("#comment-data")
        .find(".comment-visible")
        .remove();

    for (var i = 0; i < data.comments.length; i++) {
        var html = `
                    <div class="media comment-visible">
                        <div class="media-body comment-body">
                            <div class="row">
                                <span class="comment-body-time" id="created_at">${data.comments[i].created_at}</span>
                            </div>
                            <span class="comment-body-content" id="comment">${data.comments[i].comment}</span>
                        </div>
                    </div>
                `;

        $("#comment-data").append(html);
    }
  }).fail(function(data) {
    alert('fail');
  });

  setTimeout("get_data()", 3000);
}