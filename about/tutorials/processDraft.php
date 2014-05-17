<?php
	$name = $_POST['name'];
	$sitename = $_POST['sitename'];
	$pages = $_POST['pages'];
	$color = $_POST['colors'];
	$navigation = $_POST['navigation'];
	$content = $_POST['content'];
	$conn = mysql_connect("localhost","root","") or die ('Error: ' . mysql_error());
	mysql_select_db("csuwebdev", $conn);
	$dbh =  new PDO('mysql:host=localhost;dbname=csuwebdev', 'root', '');
	$stmt = $dbh->prepare("INSERT INTO draft (name, sitename,pages,colors,navigation, content) VALUES(?,?,?,?,?,?)");
	$stmt->execute(array($name,$sitename,$pages,$color,$navigation, $content)); 
	header('Location: '. $_POST['url'] . '?process=1');
 ?>