<!DOCTYPE html>
<html>
<head>
	<title><?= $pageTitle . " | The Realm Project" ?></title>
	<link rel="stylesheet" type="text/css" href="/public/
		<?php 
			if ($cssFile) { echo $cssFile; }
			else { echo "default"; }
			echo ".css";
		?>
	">
</head>
<body>
	<?php require 'nav.php'; ?>

	<div id="wrapper">