<div class="w3-content" style="max-width:1000px;margin-top:100px">
	<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    
	<h1><?= esc($title) ?></h1>
	

		<div class="postgreycorner">
		<?php 
			var_dump($arr);
			//print_r($arr);
			
			foreach ($arr as $imagename) : ?>
			<img class="responsive" src="\uploads\<?=$imagename;?>">
			<?php
			endforeach; ?>

		</div>
	</div>

</div>