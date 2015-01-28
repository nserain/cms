<?php
	
    $db = new mysqli( 'localhost' , 'root', '' , 'cms' );
	if( $db->connect_errno ){
		die( $db->connect_error );
	}
	// comcomcom------>
