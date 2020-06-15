$(window).scroll(function(){
	if($(this).scrollTop()>300){
		$("#gotoup").fadeIn();
	}
	else{
		$("#gotoup").fadeOut();
	}
});


//The below code will be the bottom of the html, body file
// $("#gotoup").click(function(){
// 	$("html, body").animate({scrollTop:0}, 500);
// });
