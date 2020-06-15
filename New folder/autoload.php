<?php include 'inc/header.php'; ?>



<script>

	$(document).ready(function(){
		
		idbBISEW();
		autoLoader();
	});


	function idbBISEW(){
		$.ajax({
			url: "idbBISEW.xml",
			dataType:"xml",
			success: function(data){
				$("ul").children().remove();
				$(data).find("employee").each(function(){
					var alldata = '<li>Name: '+$(this).find("name").text()+'</li><li>Skill: '+$(this).find("skill").text()+'</li><li>Company: '+$(this).find("company").text()+'</li>';
					$("ul").append(alldata);
				});
			},

			error: function(){
				$("ul").children().remove();
				$("ul").append("<li>There is no error....</li>");
			}


		});
	}


	function autoLoader(){
		setTimeout(function(){
			idbBISEW();
			autoLoader();

		}, 100);
	}
	
</script>



<div class="para">
	<ul></ul>

</div>


<?php include 'inc/footer.php'; ?>












<!-- 


	addClass(), removeClass(), toggleClass(), css({"property" :"value ", "...", ....})






<?php
	// function add(){
	// 	echo " live project";
	// }

?>

<script>

$(document).ready(function(){

	$("#add").click(function(){
		$("p").append("<?php add(); ?>");
	});
	$("#preadd").click(function(){
		$("p").prepend("<?php add(); ?>");
	});

});
	
</script>

<button id="add">Append</button>
<button id="preadd">Prepend</button>

<div class="para">
	<p>Training with</p>

</div>


//similarly,, after(), before(), remove(), empty()




<script>

$(document).ready(function(){
	$("#show").click(function(){
		alert($("#live").attr("href"));
	});

});
	
</script>

<button id="show">Show Value</button>

<div class="para">
	<p><a href="http://www.trainingwithliveproject.com" id="live">Training with live project</a></p>

</div>



<script>
	
	$(document).ready(function(){
		$("#hide").click(function(){
			$(".para").hide('slow');
		});

		$("#show").click(function(){
			$(".para").show('slow');
		});

		$("#toggle").click(function(){
			$("h3").toggle('slow');
		});

		$("#fadein").click(function(){
			$(".para").fadeIn('slow');
		});

		$("#fadeout").click(function(){
			$(".para").fadeOut(1000);
		});

		$("#fadeto").click(function(){
			$(".para").fadeTo(1000, 0.4);
		});

		$("#fadetoggle").click(function(){
			$(".para").fadeToggle(1000);
		});

		$("#slidedown").click(function(){
			$(".para").slideDown('slow');
		});

		$("#slideup").click(function(){
			$(".para").slideUp(1000);
		});

		$("#slidetoggle").click(function(){
			$(".para").slideToggle(1000);
		});

		$("#chaining").click(function(){

			$(".para").css("background", "green").slideUp(2000).slideDown(2000);
		});

	});

</script>


<script>
	$(document).ready(function(){
		$("#animation").click(function(){
			$(".animate").animate({
				left: '400px', 
				opacity: '0.5',
				height: '50px',
				width: '50px'
			}, 5000, function(){
				alert("<?php echo test(); ?>");
			});
		});

		$("#stop").click(function(){
			$(".animate").stop();
		})
	});
</script>

 -->





 <!-- 

<script>

$(document).ready(function(){

	$("#text").click(function(){
		alert("The text is: "+$("#line2").text());

	});

	$("#html").click(function(){
		alert("The html is: "+$("#line").html());

	});

	$("#value").click(function(){
		alert("The name is: "+$("#name").val());

	});
});
	
</script>


<button id="text">Show Text</button>
<button id="html">Show HTML</button>
<button id="value">Show Value</button>


<div class="para">

	Name: <input type="text" id="name" value="Hasinur">
	<p id="line">Training with live <strong>project</strong></p>
	<p id="line2">Md. Hasinur Rahman</p>

</div> -->



