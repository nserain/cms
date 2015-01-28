<?php
	require( 'connect.php' );
		// je genere le SQL de suppression
		$sql = "DELETE FROM
					`page`
				WHERE
					`id` = ". (int) $_POST['id']."
				LIMIT 1;";
		$db->query( $sql );
	header( 'Location: index.php' );