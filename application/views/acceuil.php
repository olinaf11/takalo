<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>acceuil</title>
</head>
<body>
<h1>Coucou</h1>
<h1>  Voici les listes d'objet de l'utilisateur : </h1>
<?php  echo $_SESSION['id']."<br>" ; ?>



<table border="1">
	<tr>
	<td>nom</td>
	<td>prix</td>
	<td>Action_modifier</td>
	<td>Action_delete</td>

	</tr>
	<?php 
foreach ($val as $leur){
?>
	<tr>
	<td><?php echo $leur['nom'];?></td>
	<td><?php echo $leur['prix'];?></td>
	<td> <a href="traitmodif?id=<?php echo $leur['id'] ;?>&&nom=<?php echo $leur['nom'];?>&&prix=<?php echo $leur['prix'] ?>">Modifier</a></td>
	<td> <a href="controlDelete?id=<?php echo $leur['id'] ; ?>"> delete </a> </td>
	</tr>
<?php  } ?>

</table>

</body>
</html>