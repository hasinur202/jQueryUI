<?php include 'inc/header.php'; ?>


<div class="para">


<script>
	$(document).ready(function(){
		$("#imgHeight, #imgWidth").slider({
			min: 100,
			max: 500,
			slide: controlimg

		});

		$("#imgOpacity").slider({
			min:0, max:100, value:100, slide:controlimg
		});

		function controlimg(){
			var height = $("#imgHeight").slider('value');
			var width = $("#imgWidth").slider('value');
			var opacity = $("#imgOpacity").slider('value');

			$("#liveimg").css({
				height:height, width:width, opacity:opacity/100
			});

			$("#state").html("Height:"+height+"pixels"+"<br/>"+"Width:"+width+"pixels"+"<br/>"+"Opacity:"+opacity/100);
			
			
		}

	});


</script>



<div id="imgHeight"></div><br/>
<div id="imgWidth"></div><br/>
<div id="imgOpacity"></div><br/>


<div id="state"></div><br/>


<img id="liveimg" src="images/me.png" style="height: 100px; width: 100px;">





</div>
<?php include 'inc/footer.php'; ?>







