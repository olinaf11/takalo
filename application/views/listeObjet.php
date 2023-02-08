<!DOCTYPE html>
<html>
<head>
	<title>listeObjet</title>
</head>
<body>
<table border="1">
	<tr>
		<td>nom</td>
	</tr>
	<?php foreach ($rep as $r) {
	
	 ?>
	<tr>
		<td><?php echo $r['nom'] ;?> </td>
	</tr>
<?php } ?>
</table>
</body>
</html>