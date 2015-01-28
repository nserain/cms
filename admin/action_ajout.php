<?php
	// je me connecte a la base
	require( 'connect.php' );
	// je genere le SQL de modification
	// ".$db->real_escape_string( $_POST['classe'] )."
	$sql = "INSERT INTO
				`page`
			(
				`title`,
				`menu_title`,
				`page`,
				`body`
			) VALUES (
				'".$db->real_escape_string( $_POST['title'] )."',
				'".$db->real_escape_string( $_POST['menu_title'] )."',
				'".$db->real_escape_string( $_POST['page'] )."',
				'".( $_POST['body'] )."'
			)";
	$db->query($sql);
	header( 'Location: index.php' );