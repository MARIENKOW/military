$(function () {
    let header = $("#header");
    let intro = $("#intro");
    let introH = intro.innerHeight() ;
    let scrollPos = $(window).scrollTop();
    let nav=$("#nav")
  
    checkScroll(scrollPos,introH);
  
    $(window).on("scroll", function () {
      introH = intro.innerHeight();
      scrollPos = $(this).scrollTop();
  
    checkScroll(scrollPos,introH);
    console.log(introH,scrollPos);

  
  
    });
    function checkScroll(scrollPos,introH){
    if (scrollPos > introH || scrollPos === introH) {
        header.addClass("fixed");
      }else {
        header.removeClass("fixed");
      }}

      
      $("[data-scroll]").on("click",function(event) {
        event.preventDefault();
        let elementID=$(this).data('scroll');
        let elementOffse = $(elementID).offset().top;
        let elementOffset = elementOffse +1;
        console.log(`hhhhhhhh${elementOffset}`);
        nav.removeClass("show");
        $("html,body").animate({
          scrollTop:elementOffset
        },700);
    
      });
    
      $("#navToggle").on("click",function(event){
        event.preventDefault();
        nav.toggleClass("show");
      });
      
     
    });
