<?php
	require( 'connect.php' );
	$sql = "SELECT
					`id`,
					`page`
				FROM
					`page`
				WHERE
					`id` = ". (int) $_GET['id'] ."
					LIMIT 1;";
	$result=$db ->query( $sql);
	$row = $result ->fetch_assoc();
	$id = $row ["id"];
	$page = $row ["page"];
?>
Vous etes sur le point de supprimer la page <?php echo " ".$row ["page"]." ";?>
qui a pour id <?php echo " ".$row ["id"];?>.
Voulez vous vraiment la supprimer?
<form action="action_suppression.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']?>">
<input type="submit" value="oui"/>
</form>
<form action="index.php">
<input type="submit" value="non"/>
</form>

