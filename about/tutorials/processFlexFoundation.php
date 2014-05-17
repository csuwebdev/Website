<?php
	$name=($_POST['name']);
	$top=($_POST['top']);
	$tree=($_POST['tree']);
	$head=($_POST['head']);
	$display=($_POST['display']);
	$attribute=($_POST['attribute']);
	$tags=($_POST['tags']);
	$src=($_POST['src']);
	$href=($_POST['href']);
	$classid=($_POST['classid']);
	$divs=($_POST['divs']);
	$semantics=($_POST['semantics']);
	$browser=($_POST['browser']);
	header('Location: '. $_POST['url'] . '?process=1');
?>
