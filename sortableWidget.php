<?php include 'inc/header.php'; ?>


<div class="para">

	<style>
		li{border: 1px solid #000; padding: 10px; cursor: pointer; margin: 3px; height: 15px; width: 300px; color: #000; list-style-type: none; }
		.ui-sortable-handle{background: #666; color: #fff;}
		.selected-item{border: 1px solid #000; margin: 3px; height: 15px; width: 300px; color: #000; list-style-type: none; background: red;}

		
		
	</style>


<script>
	$(document).ready(function(){
		$("#phpitems").sortable({
			placeholder:"selected-item",
			axis:'y',
			opacity:0.5,
			items: 'li[data-value="framework"]'
		});
		

		
	});


</script>



<ul id="phpitems">
	<li data-value="framework">CodeIgnitor</li>
	<li data-value="framework">Laravel</li>
	<li data-value="framework">Kohana</li>
	<li data-value="framework">Symfony</li>
	<li data-value="framework">FuelPHP</li>
	<li data-value="cms">Wordpress</li>
	<li data-value="cms">Drupal</li>
	<li data-value="cms">SliverStripe</li>
	
</ul>






</div>
<?php include 'inc/footer.php'; ?>







