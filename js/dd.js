var j = jQuery;

/*******************************  go to top arrow ***********************************/
	j(window).scroll(function(){
		 if (j(this).scrollTop() > 100) {
			 j('.scrollup').fadeIn();
		 } else {
			 j('.scrollup').fadeOut();
		 }
	 }); 
 
	 j('.scrollup').click(function(){
		 j("html, body").animate({ scrollTop: 0 }, 600);
		 return false;
	 });


/*******************************  scroll to contact us ***********************************/

    j('#contactus').click(function(){
		j('body').scrollTo('#contactinfo', 45, {easing:'linear'}); 
		 return false;
	 });



