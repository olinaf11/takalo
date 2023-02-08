<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>modif</title>
</head>
<body>
<form  method="get" action="donnermodif">
	<input type="hidden" name="id" value="<?php echo $ide?> ">
	<br>
	 Nom:<input type="text" name="nom" value="<?php echo $nom ?>">
	<br>
	<br>
	Prix:<input type="text" name="prix" value="<?php echo $prix ?> ">
	<br>
	<button type="submit">VALIDER</button>
</form>
</body>
</html>