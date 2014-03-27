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
	$conn = mysql_connect("localhost","root","") or die ('Error: ' . mysql_error());
	mysql_select_db("csuwebdev", $conn) or die (mysql_error());
	$dbh =  new PDO('mysql:host=localhost;dbname=csuwebdev', 'root', '');
	$stmt = $dbh->prepare("INSERT INTO quizone (name, top, tree, head, display, attribute, tags, src, href, classid, divs, semantics, browser) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->execute(array($name, $top, $tree, $head, $display,$attribute,$tags,$src,$href,$classid,$divs,$semantics,$browser,)); 
?>
