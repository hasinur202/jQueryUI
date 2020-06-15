<?php include 'inc/header.php'; ?>


<div class="para">

	<style>
		.ourDiv{height: 200px; width: 200px; color: #fff; display: table-cell; vertical-align: middle;text-align: center;}
	</style>


<script>
	$(document).ready(function(){
	
		$(".ourDiv").draggable({
			containment: '.para',
			cursor:'move', 
			opacity: 0.5
		});

		$(".ourDiv").mousedown(function(){
			var maxZindex = 0;
			$(this).siblings('.ourDiv').each(function(){
				var currentZindex = Number($(this).css('z-index'));
				maxZindex = currentZindex > maxZindex ? currentZindex : maxZindex;
			});
			$(this).css('z-index', maxZindex+1);
		});

	});


</script>



<div class="ourDiv" style="background: green;">Green</div>
<div class="ourDiv" style="background: red;">Red</div>
<div class="ourDiv" style="background: blue;">Blue</div>
<div class="ourDiv" style="background: brown;">Brown</div>



</div>
<?php include 'inc/footer.php'; ?>







