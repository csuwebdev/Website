<?php
	$target = "htmldocs/";
	$target = $target . basename( $_FILES['html']['name']);
	$target1 = "htmldocs/";
	$target1 = $target1 . basename( $_FILES['css']['name']);
	$htmlname=$_FILES['html'];
	$html=($_FILES['html']['name']);
	$cssname=$_FILES['css'];
	$css=($_FILES['css']['name']);
	$name=($_POST['name']);
	$conn = mysql_connect("localhost","root","") or die ('Error: ' . mysql_error());
	mysql_select_db("csuwebdev", $conn) or die (mysql_error());
	$dbh =  new PDO('mysql:host=localhost;dbname=csuwebdev', 'root', '');
	$stmt = $dbh->prepare("INSERT INTO basiccss (name, html, css) VALUES(?,?,?)");
	$stmt->execute(array($name, $html, $css)); 
	if(move_uploaded_file($_FILES['html']['tmp_name'], $target) &&	move_uploaded_file($_FILES['css']['tmp_name'], $target1)) {
    echo "The files have been uploaded, and your information has been added to the directory";
} else {
    echo "Sorry, there was a problem uploading your files.";
}
?>
