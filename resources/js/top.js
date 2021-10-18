window.onload = () => {
  let w_width = $(window).width();
  let r_width = w_width - 200;
  $('.py-12').css('width',r_width);
  let pageStatus = 2; //カラム数
    $('#sidebarToggler').click(function(){
        $('.sidebar').toggle();
        if(pageStatus ==　2){
          $('.page-wrapper').removeClass('d-flex');
          $('.py-12').css('width',w_width);
          pageStatus = 1;
        }else{
          $('.page-wrapper').addClass('d-flex');
          $('.py-12').css('width',r_width);
          pageStatus = 2;
        }
    })
}
