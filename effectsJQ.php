<?php include 'inc/header.php'; ?>


	<style>
		.maindiv{width: 300px; margin: 0 auto; text-align: center;margin-top: 100px;}
		#box{width: 150px; height: 150px; background: blue; color: #fff;}
	</style>




<div class="para">

<script>
	$(document).ready(function(){

		// $("#box").click(function(){
		// 	$(this).effect("shake", {
		// 		time: 10,
		// 		distance: 100
		// 	}, 3000, function(){
		// 		$(this).css("background", "red");
		// 	});
		// });
		
		$("#box").click(function(){
			$(this).effect({
				effect: "explode",
				easing: "easeInExpo",
				pieces: 4,
				duration: 4000
			});
		});



		
	});


</script>


<div class="maindiv">
	<div id="box">Click Here...</div>
</div>












</div>
<?php include 'inc/footer.php'; ?>







