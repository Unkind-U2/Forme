// ハンバーガーメニュー

$(".hamburger").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
      $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
      $("body").toggleClass('hidden');
  });
  
  $("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
      $(".hamburger").removeClass('active');//ボタンの activeクラスを除去し
      $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
      $("body").removeClass('hidden');
});

// ローディング画面

$(window).on('load',function(){
    $(window).scrollTop(10);
    $(".favicon").delay(500).fadeOut('slow');
    $(".loading").delay(1000).fadeOut('slow');
    $(".pencil").delay(3000).fadeOut('slow');
})

// ヘッダースクロール
var lastPos = 0;
function ScrollAnime(){
    var areaTop = $('.first-view').offset().top;
    var scroll = $(window).scrollTop();
    if(scroll == lastPos){

    } else if(areaTop > scroll || 1 > scroll - lastPos){
        $('.header').removeClass('UpMove');
        $('.header').addClass('DownMove');
        console.log( scroll - lastPos)
    }else {
        $('.header').removeClass('DownMove');
        $('.header').addClass('UpMove');
        
    }
    lastPos = scroll;
}

$(window).scroll(function(){
    ScrollAnime();
});