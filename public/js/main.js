$(function(){
  // カルーセルのjqueryプラグイン
  // $('.bxslider').bxSlider({
  //   mode: 'fade'
  // });

  // 画面右下の推しメン画像をマウスホバーした時に、装飾をつける
  $('.top-scroll-right img').hover(
    function() {
      $(this).stop(true).animate({
        opacity:0.5
      },500);
    }, function() {
      $(this).stop(true).animate({
        opacity:1
      },500);
    }
  );

  // 画面右下の推しメン画像をクリックすると、画面一番上にアニメーション付きでスクロールする
  $('.top-scroll-right img').on('click',function() {
    $('body, html').animate({
      scrollTop: 0
    }, 300, 'linear');
  });

  // ハンバーガーメニュークリック時の左外コンテンツ表示処理
  $('.side-menu').on('click',function() {
    $('.menu-content').stop(true).animate({
      'left' : 0
    },300,'linear');
    $(this).html('<i class="menu-close fas fa-times"></i>');
  });

  // スマホサイズ時のメンバー別動画リンク押下時の左外コンテンツ表示処理
  $('.sideMenuDisp').on('click',function() {
    $('.menu-content').stop(true).animate({
      'left' : 0
    },300,'linear');
    $(this).html('<i class="menu-close fas fa-times"></i>');
    // スマホ版のメニューの表示を画面上から消す
    $('.headerNavMenuContent').animate({
      'top' : '-50%'
    },200);
  });

  // 左外コンテンツの「×」ボタン押下時のコンテンツ非表示処理
  $(document).on('click','.fa-times',function() {
    $('.menu-content').stop(true).animate({
      'left' : '-100%'
    },300,'linear');
    $('.side-menu').html('<img src="image/menu.jpg" height="30" width="30">');
  });

  // 左外コンテンツの乃木坂メンバータブ押下時の処理
  $('.menu-content-right-nav div:eq(0)').on('click',function() {
    $('.menu-content-item-wrapper-nogizaka').css('display','block');
    $('.menu-content-item-wrapper-keyakizaka').css('display','none');
    $('.menu-content-item-wrapper-hinatazaka').css('display','none');
    $('.menu-content-right-title span').text('乃木坂');
    $(this).css('background-color','#7e1184');
    $('.menu-content-right-nav div:eq(1)').css('background-color','');
    $('.menu-content-right-nav div:eq(2)').css('background-color','');
    $('.menu-content-right-title').css('background-color','#7e1184');
    $('.menu-content-right').css('border-left-color','#7e1184');
  });

  // 左外コンテンツの欅坂メンバータブ押下時の処理
  $('.menu-content-right-nav div:eq(1)').on('click',function() {
    $('.menu-content-item-wrapper-nogizaka').css('display','none');
    $('.menu-content-item-wrapper-hinatazaka').css('display','none');
    $('.menu-content-item-wrapper-keyakizaka').css('display','block');
    $('.menu-content-right-title span').text('欅坂');
    $('.menu-content-right-nav div:eq(0)').css('background-color','');
    $(this).css('background-color','#5fb955');
    $('.menu-content-right-nav div:eq(2)').css('background-color','');
    $('.menu-content-right-title').css('background-color','#5fb955');
    $('.menu-content-right').css('border-left-color','#5fb955');
  });

  // 左外コンテンツの日向坂メンバータブ押下時の処理
  $('.menu-content-right-nav div:eq(2)').on('click',function() {
    $('.menu-content-item-wrapper-nogizaka').css('display','none');
    $('.menu-content-item-wrapper-keyakizaka').css('display','none');
    $('.menu-content-item-wrapper-hinatazaka').css('display','block');
    $('.menu-content-right-title span').text('日向坂');
    $('.menu-content-right-nav div:eq(0)').css('background-color','');
    $('.menu-content-right-nav div:eq(1)').css('background-color','');
    $(this).css('background-color','#5bbee5');
    $('.menu-content-right-title').css('background-color','#5bbee5');
    $('.menu-content-right').css('border-left-color','#5bbee5');
  });

  $('.loveRegister').on('click',function() {
    // 推しメン選択モーダル表示中、背景を薄くする
    $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',0.3);
      // 乃木坂推しメン選択モーダルをアニメーションで表示する
    $('.main .modal-wrapper').animate({
      'left' : '50%'
    },1000,'linear');
    // スマホ版のメニューの表示を画面上から消す
    $('.headerNavMenuContent').animate({
      'top' : '-50%'
    },200);
  });

  // 推しメンエリアをマウスホバーした際に、少し薄くする
  $('.modal-content-item, .modal-content-item2, .modal-content-item3').hover(
    function() {
      $(this).css('opacity',0.7);
    }, function() {
      $(this).css('opacity',1);
    }
  );

  // 推しメンエリアをクリックした際に、ラジオボタンにチェックが入る
  $('.modal-content-item, .modal-content-item2, .modal-content-item3').on('click',function() {
    $(this).find('input').prop('checked',true);
  });

  // 乃木坂推しメンモーダルの選択後、欅坂推しメンモーダルを表示する
  $('.modal-skip, .modal-submit').on('click',function() {
    $('.modal-wrapper').animate({
      'left' : '150%'
    },500);
    $('.modal-wrapper2').animate({
      'left' : '50%'
    },500);
  });

  // 欅坂推しメンモーダルの選択後、日向坂推しメンモーダルを表示する
  $('.modal-skip2, .modal-submit2').on('click',function() {
    $('.modal-wrapper2').animate({
      'left' : '150%'
    },500);
    $('.modal-wrapper3').animate({
      'left' : '50%'
    },500);
  });

  // 日向坂推しメンモーダルの選択後、坂道グループ動画館のトップページを表示する
  $('.modal-skip3, .modal-submit3').on('click',function() {
    $('.modal-wrapper3').animate({
      'left' : '150%'
    },500);
  });

  // 選択した推しメンを取得し、表示する
  var nogizakaImg = '';
  var keyakizakaImg = '';
  var hinatazakaImg = '';
  var nogizakaName = '';
  var keyakizakaName = '';
  var hinatazakaName = '';

  $('.modal-submit').on('click',function() {
    // トップスクロール用画像取得
    nogizakaImg = $('.modal-wrapper input:checked').parent().parent().find('img').attr('src');
    // 推しメン登録用メンバー名取得
    nogizakaName = $('.modal-wrapper input:checked').parent().find('label').text();
  });

  $('.modal-submit2').on('click',function() {
    // トップスクロール用画像取得
    keyakizakaImg = $('.modal-wrapper2 input:checked').parent().parent().find('img').attr('src');
    // 推しメン登録用メンバー名取得
    keyakizakaName = $('.modal-wrapper2 input:checked').parent().find('label').text();
  });

  $('.modal-skip3, .modal-submit3').on('click',function() {
    // 最後のモーダルでスキップボタン押下時の処理
    if ($(this).hasClass('modal-skip3')) {
      // 日向坂の推しメンを選択後、背景を元に戻す
      $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',1);
      // 初期で乃木坂の推しメン画像をトップスクロールに設置する
      $('.top-scroll-right img').attr('src',nogizakaImg);

      // 推しメン登録
      $.ajax({
        type:'GET',
        url:'http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/user/loveRegister',
        data: {
          'nogizakaName': nogizakaName,
          'keyakizakaName': keyakizakaName,
          'hinatazakaName': hinatazakaName
        }
      }).done(function(data) {
        console.log(data);
      }).fail(function(data) {
        alert('fail');
        console.log(data);
      });
    } else if ($(this).hasClass('modal-submit3')) {
      // 日向坂の推しメンを選択後、背景を元に戻す
      $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',1);
       // トップスクロール用画像取得
      hinatazakaImg = $('.modal-wrapper3 input:checked').parent().parent().find('img').attr('src');
      // 推しメン登録用メンバー名取得
      hinatazakaName = $('.modal-wrapper3 input:checked').parent().find('label').text();

      // 初期で乃木坂の推しメン画像をトップスクロールに設置する
      $('.top-scroll-right img').attr('src',nogizakaImg);

      // 推しメン登録
      $.ajax({
        type:'GET',
        url:'http://192.168.33.14/laravel_lessons/development/sakamiti_com/public/user/loveRegister',
        data: {
          'nogizakaName': nogizakaName,
          'keyakizakaName': keyakizakaName,
          'hinatazakaName': hinatazakaName
        }
      }).done(function(data) {
        console.log(data);
      }).fail(function(data) {
        alert('fail');
        console.log(data);
      });
    }
  });

  // 5秒ごとに右下トップスクロール用の画像を推しメンに切り替える
  var testTimer;
  testTimer = setInterval(function(){
    if ($('.top-scroll-right img').attr('src') === nogizakaImg) {
      $('.top-scroll-right img').attr('src',keyakizakaImg);
    } else if ($('.top-scroll-right img').attr('src') === keyakizakaImg) {
      $('.top-scroll-right img').attr('src',hinatazakaImg);
    } else if ($('.top-scroll-right img').attr('src') === hinatazakaImg) {
      $('.top-scroll-right img').attr('src',nogizakaImg);
    }
    } , 5000);

    $(document).ready(function() {
      $('.row1-image iframe').attr('width','100%')
                          .attr('height','100%');
      $('.row1-image iframe').hover(
        function() {
          $(this).css('transform', 'scale(1.05, 1.05)');
        }, function() {
          $(this).css('transform', 'scale(1, 1)');
        }
      );
    });


    // キーワード入力して送信後、ニコ生風にメッセージが左から右に流れていく
    $('#message-flow-submit').on('click',function() {
      var message = $('#message-flow').val();
      $('#message-flow').val('');
      var message = `<p>${message}</p>`;
      $('#flow').html(message);
      $('#flow').css({
        position: 'fixed',
        top: '5%',
        left: '-30%',
        color: 'red',
        fontWeight: 'bold'
      });
      $('#flow').stop(true).animate({
        left: '150%'
      },15000);
    });

    // 各トップページごとに背景色・ナビバーを切り替える
    if($('h2:eq(0):contains("坂道グループ")').length) {
      $('body').css('background-image','linear-gradient(to right, #fddb92 0%, #d1fdff 100%)');
    } else if ($('h2:eq(0):contains("乃木坂")').length) {
      $('body').css('background-image','linear-gradient(to right, #a18cd1 0%, #fbc2eb 100%)');
      $('span:contains("乃木坂動画館")').parent().css('display','none');
      $('.nav-bar div').css('width','50%');
    } else if ($('h2:eq(0):contains("欅坂")').length) {
      $('body').css('background-image','linear-gradient(to right, #90ee90 0%, #38f9d7 100%)');
      $('span:contains("欅坂動画館")').parent().css('display','none');
      $('.nav-bar div').css('width','50%');
    } else if ($('h2:eq(0):contains("日向坂")').length) {
      $('body').css('background-image','linear-gradient(to right, #89f7fe 0%, #66a6ff 100%)');
      $('span:contains("日向坂動画館")').parent().css('display','none');
      $('.nav-bar div').css('width','50%');
    }

    // ログイン後推しメン登録モーダル表示
    if ($('#loveMemberDisp').length) {
      // 推しメン選択モーダル表示中、背景を薄くする
      $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu').css('opacity',0.3);
      // 乃木坂推しメン選択モーダルをアニメーションで表示する
      $('.main .modal-wrapper').animate({
        'left' : '50%'
      },1000,'linear');
    }

    // 検索フォームにカーソルが当たった際のアニメーション
    $('.sideInput').on('focus',function() {
      $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',0.3);
      $('#modalSideForm').animate({
        'top' : '50%',
        'width' : '25vw'
      },500,'linear');
    });

    $('.modalSideInput').on('focus',function() {
      $('#modalSideForm').addClass('dummy');
    });

    // 検索フォーム以外をクリックした時の処理
    $(document).on('click',function(e) {
        if(!$(e.target).closest('#modalSideForm').length) {
          if ($('#modalSideForm').hasClass('dummy')) {
            $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',1);
            $('#modalSideForm').animate({
              'top' : '-10%'
            },300,'linear');
            $('#modalSideForm').removeClass('dummy');
          }
        }
   });

   $(document).on('click','#categorySearchBtn',function() {
     $('#categorySearch').animate({
       'top' : '50%'
     },500,'linear');
     $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',0.3);
     $('.headerNavMenuContent').animate({
      'top' : '-50%'
    },200);
   })

   $(document).on('click','#categorySearchClose',function() {
    $('#categorySearch').animate({
      'top' : '-100%'
    },500,'linear');
    $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',1);
   });

   $(document).on('click','#responsiveCategorySearchClose',function() {
    $('#categorySearch').animate({
      'top' : '-100%'
    },500,'linear');
    $('.header, .main-title, .nav-bar, .main-pan, .top-scroll-right, .bxslider-wrapper, .side, .content, .side-menu, .breadcrumb').css('opacity',1);
    $('#responsiveNogizakaCategorySearch, #responsiveKeyakizakaCategorySearch, #responsiveHinatazakaCategorySearch').css('display','block');
    $('#categorySearchModalContent .responsiveNogizaka, #categorySearchModalContent .responsiveKeyakizaka, #categorySearchModalContent .responsiveHinatazaka').css('display','none');
    $('#categorySearch').css('height','33vh');
   });

  //  カテゴリ検索モーダルのタブ切り替え
  $(document).on('click','#nogizakaCategorySearch',function() {
    $('#categorySearchModalContent .nogizaka').css('display','block');
    $('#categorySearchModalContent .keyakizaka').css('display','none');
    $('#categorySearchModalContent .hinatazaka').css('display','none');
  });

  $(document).on('click','#keyakizakaCategorySearch',function() {
    $('#categorySearchModalContent .nogizaka').css('display','none');
    $('#categorySearchModalContent .keyakizaka').css('display','block');
    $('#categorySearchModalContent .hinatazaka').css('display','none');
  });

  $(document).on('click','#hinatazakaCategorySearch',function() {
    $('#categorySearchModalContent .nogizaka').css('display','none');
    $('#categorySearchModalContent .keyakizaka').css('display','none');
    $('#categorySearchModalContent .hinatazaka').css('display','block');
  });

  // カテゴリ検索モーダルのレスポンシブ版タブ切り替え
  $(document).on('click','#responsiveNogizakaCategorySearch',function() {
    $('#responsiveNogizakaCategorySearch, #responsiveKeyakizakaCategorySearch, #responsiveHinatazakaCategorySearch').css('display','none');
    $('#categorySearch').animate({
      'height' : '60vh'
    },300);
    $('#categorySearchModalContent .responsiveNogizaka').css('display','block');
    $('#categorySearchModalContent .responsiveKeyakizaka, #categorySearchModalContent .responsiveHinatazaka').css('display','none');
  });

  $(document).on('click','#responsiveKeyakizakaCategorySearch',function() {
    $('#responsiveNogizakaCategorySearch, #responsiveKeyakizakaCategorySearch, #responsiveHinatazakaCategorySearch').css('display','none');
    $('#categorySearch').animate({
      'height' : '60vh'
    },300);
    $('#categorySearchModalContent .responsiveKeyakizaka').css('display','block');
    $('#categorySearchModalContent .responsiveNogizaka, #categorySearchModalContent .responsiveHinatazaka').css('display','none');
  });

  $(document).on('click','#responsiveHinatazakaCategorySearch',function() {
    $('#responsiveNogizakaCategorySearch, #responsiveKeyakizakaCategorySearch, #responsiveHinatazakaCategorySearch').css('display','none');
    $('#categorySearch').animate({
      'height' : '60vh'
    },300);
    $('#categorySearchModalContent .responsiveHinatazaka').css('display','block');
    $('#categorySearchModalContent .responsiveNogizaka, #categorySearchModalContent .responsiveKeyakizaka').css('display','none');
  });

   $(document).on('click','#headerMenuBar',function() {
     $('.headerNavMenuContent').animate({
       'top' : '0%'
     },200);
   });

   $(document).on('click','.headerNavMenuContentModal .close',function() {
    $('.headerNavMenuContent').animate({
      'top' : '-50%'
    },200);
   });
});