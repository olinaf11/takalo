<!DOCTYPE html>
<html>
<head>
	<title>acceuil </title>
</head>
<body>
<h1>Vous etes connecter en tant que ADMIN</h1>
 <table border="1">
	<tr>
		<td>nom_categ</td>
	</tr>
	<?php foreach ($valiny as $key) { ?>
	<tr>
		<td> <?php echo $key['nom'] ;?> </td>
	</tr>
	<?php 
	} ?>
</table> 
<?php echo $_SESSION['id'] ; ?>

<form action="Login/ajoutCat" method="get">
	<input type="text" name="categori">
	<button>Ajouter</button>
</form>







</body>
</html>