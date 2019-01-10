<?php

echo <<<_END
	
	<form method='post' action='test.php' enctype='multipart/form-data'>
		
		<h3>Select Image to Upload:</h3> <br><br>
		<input type='file' name='filename' size='10'>
		<input type='submit' value='Upload'>

	</form>
_END;

if($_FILES) {
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	echo <<<_END

	<div class='uploadedImage'>
		<img src='$name'>
	</div>

_END;
};


?>