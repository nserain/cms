<?php
	require_once( 'connect.php' );
	if( count($_POST)== 0 ){
        header( 'Location: index.php?page=accueil' );
	exit;
	}
	$sql = "INSERT INTO
		`accueil`
		(
			`file`,
			`menu_title`,
			`title`,
		)
		`anime`
		(
			`file`,
			`menu_title`,
			`title`,
		)
		`chatons`
		(
			`file`,
			`menu_title`,
			`title`,
		)
		`teletubbies`
		(
			`file`,
			`menu_title`,
			`title`,
		)
		VALUES (
			'". $db->real_escape_string( $_POST['file'] ) ."',
			'". $db->real_escape_string( $_POST['menu_title'] ) ."',
			'". $db->real_escape_string( $_POST['title'] ) ."'
		);";
	if( !$db->query( $sql )){
		die( $db->error );
	}
?>