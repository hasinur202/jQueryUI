<?php include 'inc/header.php'; ?>


<div class="para">

	<style>
		
		li{display: inline-block; padding: 15px; border: 1px solid #666; cursor: pointer;}
		.ui-selectee{color: green;}
		.ui-selectee:hover{border: 3px solid #a288a288; background: black; color:#fff}
		.ui-selected{background: green; color: #fff;}
		.ui-selecting{background: yellow; color: black;}
		
	</style>


<script>
	$(document).ready(function(){
		$("#javaitem").selectable({
			stop: function(event, ui){
				var output="";
				$(".ui-selected").each(function(){
					output+=$(this).text()+"<br/>";

				});
				$("#state").html(output);
			}
		});

		
	});


</script>



<ul id="javaitem">
	<li>Servlets</li>
	<li>JSP</li>
	<li>JSTL</li>
	<li>Struts 2.0</li>
	<li>Jasper Report</li>
	<li>Spring</li>
</ul>
<br/>
You Selected: 
<div id="state"></div>




</div>
<?php include 'inc/footer.php'; ?>







