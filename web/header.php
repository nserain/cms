<?php
	if(!isset($title)){
		$title = "Le dev est un boulet";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
		<!-- Commentaire alexa-->
</head>
<body>
<div id="header" class="largeur-de-la-balle">Le header</div>
<div id="menu" class="largeur-de-la-balle">
<?php
	$sql = "SELECT
				`page`,
				`menu_title`
			FROM
				`page`
			";
	if(!($result = $db->query($sql))){
		die('erreur SQL header');
	}

?>
<?php while( $row = $result->fetch_assoc()): ?>
	<a href="index.php?page=<?php echo $row['page'];?>"><?php echo $row['menu_title']?></a>
<?php endwhile;?>
</div>
<div id="content" class="largeur-de-la-balle">
