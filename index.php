<?php
if(file_exists("config.php")) {
	include("config.php");
	} else {
		echo "Die config.php existiert nicht";
		exit;
	}
if ($_GET['page']) {
	if(file_exists("pages/" . $_GET['page'] . ".php")) {
		$file_path = "pages/" . $_GET['page'] . ".php";
		include($file_path);
	} else {
		header("Status: 404 Not Found"); // Gebe 404 aus
		include("pages/404.php"); // gebe die 404 Seite aus, für den Fall, dass keine ErrorPage gesetzt wurde
	}
} else {
	include("pages/index.php");
}
?>
