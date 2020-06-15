<?php include 'inc/header.php'; ?>


<div class="para">

	<style>
		.boxone{height: 100px; width: 100px; text-align: center; padding: 10px; color: #fff;}
		.border{height: 300px; width: 560px; border: 2px solid #000; padding: 10px;}
		.ui-resizable-helper{border: 2px dotted #444;}
	</style>


<script>
	$(document).ready(function(){
		$("#boxone").resizable({
			containment: "parent",
			//alsoResize: "#boxtwo"
			//animate: true,
			//ghost: true,
			// minHeight: 150,
			// minWidth: 150,
			// maxHeight: 300,
			// maxWidth: 300,
			//aspectRatio: true

			start: function(event, ui){
				$(".startDim").html(liveDim(event, ui));
			},

			resize: function(event, ui){
				$(".resizeDim").html(liveDim(event, ui));
			},
			
			stop: function(event, ui){
				$(".stopDim").html(liveDim(event, ui));
			}

		});

		function liveDim(event, ui){
			var ele = "Height: "+ui.size.height+"<br/>"+"Width: "+ui.size.width;
			return ele;
		}

	});


</script>


<table border="1" style="border-collapse: collapse;" cellpadding="5px">
	<tr>
		<td>Start</td>
		<td><div class="startDim"></div></td>
	</tr>
	
	<tr>
		<td>Resizing</td>
		<td><div class="resizeDim"></div></td>
	</tr>
	
	<tr>
		<td>Stop</td>
		<td><div class="stopDim"></div></td>
	</tr>

</table>



<br/>

<div class="boxone" id="boxone" style="background: #666;">
		This is box one
	</div>






<!-- 
	<div class="border"> 

		<br/>

	<div class="boxone" id="boxtwo" style="background: #666;">
		This is box one
	</div>

	</div>
 -->



</div>
<?php include 'inc/footer.php'; ?>







