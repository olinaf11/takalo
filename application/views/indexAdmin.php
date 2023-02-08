<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form  method="post" action="LoginAdmin/traitForm">
	 Mail:<input type="text" name="email">
	<br>
	<br>
	MDP:<input type="text" name="password">
	<br>
	<button type="submit">VALIDER</button>
</form>
</body>
</html>