<?php
if(isset($errors) && count($errors) != 0){
			echo '<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
				foreach ($errors as $errors) {
					echo $errors.'<br/>';
				}

			echo '</div>';
		}
?>
<style type="text/css">
	top: 200p
</style>