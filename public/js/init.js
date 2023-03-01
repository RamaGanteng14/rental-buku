(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
	$('ul.tabs').tabs('select_tab', 'tab_id');
	  	$(window).scroll(function(){
  var scroll = $(window).scrollTop();

  if (scroll >= 500){
    $("nav").addClass("dark-nav");
	  $("nav").removeClass("transparent");
  }else{
    $("nav").removeClass("dark-nav");
	  $("nav").addClass("transparent");
  }
})
	   $(document).ready(function(){
		   if ($(window).width() < 700){
			   var t = 500
			   console.log("Mobile");
		   }else{
			   var t = 600
			   console.log("Res");
		   }
      $('.slider').slider({
		  indicators : false,
		  height : t,
		  interval : 6000,
	  });
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space