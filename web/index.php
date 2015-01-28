<?php
	require ('connect.php');
	if( isset( $_GET['page'] )/* && isset( $les_pages[$_GET['page']] )*/) {
		$page_courante = $_GET['page'];
	} else {
		header( 'Location: index.php?page=accueil' );
		die();
	}
	$sql = "SELECT
			`title`,
			`body`
		FROM
			`page`
		WHERE
			`page` = '". $_GET['page'] ."'
			";
	$result=$db ->query( $sql);
	$row = $result ->fetch_assoc();
	$title = $row ["title"];
	$body = $row ["body"] ;
	// afficher le header
	include( 'header.php' );
	// afficher le contenu
	echo $body;
	// afficher le footer
	include( 'footer.php' );
