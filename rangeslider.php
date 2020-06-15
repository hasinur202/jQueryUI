<?php include 'inc/header.php'; ?>


<div class="para">



<script>
	$(document).ready(function(){
		var getOutput = $("#state");
		var getSlider = $("#slider");

		getSlider.slider({
			range:true,
			min:10,
			max:100,
			// step: 10,
			values:[20, 40],
			slide: function(event, ui){
				getOutput.html(ui.values[0]+'-'+ui.values[1]+' Taka');
				$("#minValue").val(ui.values[0]);
				$("#maxValue").val(ui.values[1]);

			}
			// ,
			// stop: function(event, ui){
			// 	$("#minValue").val(ui.values[0]);
			// 	$("#maxValue").val(ui.values[1]);
			// }

		});

	getOutput.html(getSlider.slider('values', 0)+'-'+getSlider.slider('values', 1)+' Taka');

	$("#minValue").val(getSlider.slider('values', 0));	
	$("#maxValue").val(getSlider.slider('values', 1));	


	});


</script>









	

Amount: <span id="state"></span><br/><br/>
<div id="slider"></div><br/>


<table>
	<tr>
		<td><label for="minValue">Minimum Amount:</label></td>
		<td><input type="text" id="minValue"></td>
	</tr>

	<tr>
		<td><label for="maxValue">Maximum Amount:</label></td>
		<td><input type="text" id="maxValue"></td>
	</tr>
</table>

	

</div>
<?php include 'inc/footer.php'; ?>







