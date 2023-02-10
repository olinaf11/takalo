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
		<td> Action  </td>
	</tr>
	<?php foreach ($valiny as $key) { ?>
	<tr>
		<td> <?php echo $key['nom'] ;?> </td>
		<td>  <a href="deleteCat?id=<?php echo $key['id'] ; ?> ">DELETE </a> </td>
	</tr>
	<?php 
	} ?>
</table> 
<?php echo $_SESSION['id'] ; ?>

<form action="ajoutCat" method="get">
	<input type="text" name="categorie">
	<button>Ajouter</button>
</form>
<br><br>

<form action="rechercher" method="get">
<label for="cherche">Mot-Cle:</label>
<input type="text" name="mot" id="cherche">
<label for="cat">categorie:</label>
<select name=" cat" id="cat">
<option> tous</option>
<?php foreach ($valiny as $key) { ?>
<option><?php echo $key['nom'] ?></option>
<?php } ?>
</select>
<button>Rechercher</button>
</form>


<?php
foreach($R as $r){
	echo $r['nom']."<br>" ;
} 
?>

</body>
</html>