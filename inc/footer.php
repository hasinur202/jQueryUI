</section>
<section class="footeroption">
 <p>©<?php echo date("Y"); ?> Hasinur Rahman Aryan</p>
  <h2><?php echo "www.facebook.com"; ?></h2>
 </section>
</div>
	<div id="gotoup">
		
	</div>




<script>


$(window).scroll(function(){
	if($(this).scrollTop()>300){
		$("#gotoup").fadeIn("1000");
	}
	else{
		$("#gotoup").fadeOut("1000");
	}
});


$("#gotoup").click(function(){
	$("html, body").animate({scrollTop:0}, 500);
});


</script>



</body>
</html>