<?php
	require( 'connect.php' );
	// recupere les données du personnage que je veux editer
	$sql = "SELECT
				`id`,
				`title`,
				`menu_title`,
				`page`,
				`body`
			FROM
				`page`
			WHERE
				id = ". (int) $_GET['id'] ."
			LIMIT 1;";
	// execution SQL
	$result = $db->query( $sql );
	// recupe dans un tableau
	$row = $result->fetch_assoc();
	// creation du formulaire avec les données de la page
?>
<form action="action_modification.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row['id']?>">
	<input type="text" name="title" value="<?php echo $row['title']?>" placeholder="titre"/>
	<input type="text" name="menu_title" value="<?php echo $row['menu_title']?>" placeholder="menu"/>
	<input type="text" name="page" value="<?php echo $row['page']?>" placeholder="adresse"/>
	<textarea name="body" placeholder="contenu" cols="50" rows="5" ><?php echo $row['body']?></textarea>
	<input type="submit" value="Modifier" />
</form>