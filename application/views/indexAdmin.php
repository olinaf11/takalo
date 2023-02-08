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
	 Mail:<input type="text" name="email" value="admin@gmail.com">
	<br>
	<br>
	MDP:<input type="text" name="password" value="admin">
	<br>
	<button type="submit">VALIDER</button>
</form>
</body>
</html>