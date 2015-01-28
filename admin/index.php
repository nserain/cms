<?php
	// connection à la base de données en inclusion
	require( 'connect.php' );
	$sql = "SELECT
				`id`,
				`title`,
				`menu_title`,
				`page`,
				`body`
			FROM
				`page`
			WHERE
				1;";
	// recuperation des données de la liste
	if( !($result = $db->query( $sql ))){
		die('marche pas');
	}
?>
<form action="form_ajout.php" method="post">
<input type="submit" value="ajouter une page"/>
</form>
<table border="1">
	<tr>
		<th>titre yolo</th>
		<th>menu</th>
		<th>adresse</th>
		<th>contenu</th>
	</tr>
	<?php while( $row = $result->fetch_assoc()){?>
	<tr>
		<td><?php echo $row['title']?></td>
		<td><?php echo $row['menu_title']?></td>
		<td><?php echo $row['page']?></td>
		<td><?php echo $row['body']?></td>
		<td>
			<a href="form_suppression.php?id=<?php echo $row['id']?>">Supprimer</a>
			<a href="form_modification.php?id=<?php echo $row['id']?>">Modifier</a>
		</td>
	</tr>
	<?php } ?>
</table>
