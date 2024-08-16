$(function(){
  // ドロワー開閉
 $('.c-drawer__icon').click(function(e){
  e.preventDefault();
  $('.c-drawer__icon, .l-drawer, .l-drawer__bg').toggleClass(`is-active`);
  return false
 });

 $('.l-drawer__link a[href^="#"]').click(function(e){
  e.preventDefault();
  $('.c-drawer__icon, .l-drawer, .l-drawer__bg').removeClass(`is-active`);
  return false
 });

 // #から始まるURLがクリックされた時
 $('a[href^="#"]').click(function() {
  // 移動速度を指定（ミリ秒）
  let speed = 500;
  // hrefで指定されたidを取得
  let id = $(this).attr('href');
  // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
  let target = $("#" == id ? "html" : id);
  // ページのトップを基準にターゲットの位置を取得
  let position = $(target).offset().top;
  // ターゲットの位置までspeedの速度で移動
  $('html, body').animate(
    {
      scrollTop: position - $('#js-header').outerHeight()
   },
    speed, "swing"
  );
  return false;
 });

});

