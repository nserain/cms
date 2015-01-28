<?php
	require( 'connect.php' );
?>
<form action="action_ajout.php" method="post">
	<input type="text" name="title" placeholder="titre"/>
	<input type="text" name="menu_title" placeholder="menu"/>
	<input type="text" name="page" placeholder="adresse"/>
	<textarea name="body" placeholder="contenu" cols="50" rows="5" ></textarea>
	<input type="submit" value="Ajouter"/>
</form>