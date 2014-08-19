<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
		include "header1.php";
		header('Location: index.php');
	}else{ 	
		include "header.php";
	}
?>

<form action="fotos.php" method="post" enctype="multipart/form-data">
Seleccione su albúm:<br/>
<input type="file" name="archivo[]" />
<input type="file" name="archivo[]" multiple="multiple" />
<input type="submit" />
</form>

<?php
	include "footer.php";
?>