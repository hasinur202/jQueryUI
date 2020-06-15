<?php include 'inc/header.php'; ?>


<div class="para">

	<style>
		.box{background: #eee; border: 2px solid #666; display: inline-table; font-size: 18px; padding: 5px; width: 250px;}
		li{font-size: 18px;}
		.widgethover{background: #666; border: 2px solid #000; color: #fff;}
	</style>


<script>
	$(document).ready(function(){
		$("#techlist li").draggable({
			//helper: 'clone',
			//Or
			helper: function(){
				return "<b>"+$(this).text()+"</b>";
			},
			revert: 'invalid',
			cursor: 'move',
			containment: '.para'
		});


		$("#phpFramework").droppable({
			accept: 'li[data-value="php"]',
			// over: function(event, ui){
			// 	$(this).addClass("widgethover");
			// },
			// out: function(event, ui){
			// 	$(this).removeClass("widgethover");
			// },  
			//Or
			//hoverClass: "widgethover", //this is good
			// Or
			// activate: function(event, ui){
			// 	$(this).addClass("widgethover");
			// },
			// deactivate: function(event, ui){
			// 	$(this).removeClass("widgethover");
			// },  //This is more good
			//Or,
			activeClass: "widgethover",
			drop: function(event, ui){
				$('#php').append(ui.draggable);
			}
		});
		

		$("#javaFramework").droppable({
			accept: 'li[data-value="java"]',
			activeClass: "widgethover",

			drop: function(event, ui){
				$('#java').append(ui.draggable);
			}
		});

	});


</script>



	<div class="box">
		PHP & JAVA Framework<hr/>
		<ul id="techlist">
			<li data-value="php">CodeIgniter</li>
			<li data-value="php">CakePHP</li>
			<li data-value="php">Kohana</li>
			<li data-value="php">Laravel</li>

			<li data-value="java">Spring</li>
			<li data-value="java">Hibernate</li>
			<li data-value="java">Struts 2</li>
		</ul>
	</div>

	<div class="box" id="phpFramework">
		PHP Framework<hr/>
		<ul id="php"></ul>
	</div>


	<div class="box" id="javaFramework">
		JAVA Framework<hr/>
		<ul id="java"></ul>
	</div>


</div>
<?php include 'inc/footer.php'; ?>







