<?php
		// je me connecte a la base
		require( 'connect.php' );
		// je genere le SQL de modification
		$sql = "UPDATE
					`page`
				SET
					`title`='".$db->real_escape_string( strip_tags( $_POST['title'] ))."',
					`menu_title`='".$db->real_escape_string( strip_tags( $_POST['menu_title'] ))."',
					`page`='".$db->real_escape_string( strip_tags( $_POST['page'] ))."',
					`body`='".( $_POST['body'] )."'
				WHERE
					id = ". (int) $_POST['id']."
				LIMIT 1;";
		$db->query($sql);
	header( 'Location: index.php' );