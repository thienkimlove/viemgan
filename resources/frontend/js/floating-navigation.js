fixNavi();
$(window).scroll(fixNavi);
//#navGlobal
function fixNavi(){
  if( $(window).scrollTop() > 120 ){
    $('#navGlobal').css('top','0px');
  }else{
    var d = 120 - $(window).scrollTop();
    $('#navGlobal').css('top', d+"px" );
  }
}