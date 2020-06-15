<?php include 'inc/header.php'; ?>

<div class="para">


<script>
	$(document).ready(function(){
		$("#myspinner").spinner({
			step:5,
			min:-10,
			max:500
		});
		
		
	});
</script>



	<div class="main">
		<input type="text" id="myspinner" value="0">
	</div>











</div>
<?php include 'inc/footer.php'; ?>

