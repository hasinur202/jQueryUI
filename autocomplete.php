<?php include 'inc/header.php'; ?>


<div class="para">

	<style>
		
	</style>


<script>
	$(document).ready(function(){

		var tech=[
			"PHP",
			"JAVA",
			"HTML",
			"CSS",
			"jQuery",
			"JavaScript",
			"Perl",
			"Ruby",
			"Swing"

		];

		$("#gettech").autocomplete({
			source: tech,
			autoFocus: true
			//minLength: 2,
			//delay: 500
		});
		
		
	});


</script>


<p>Type: p, t, j...</p>
<label for="gettech">Type Technology Name: </label>
<input type="text" id="gettech">




</div>
<?php include 'inc/footer.php'; ?>
