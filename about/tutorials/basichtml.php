<?php
	$target = "htmldocs/";
	$target = $target . basename( $_FILES['filename']['name']);
	$filename=$_FILES['filename'];
	$file=($_FILES['filename']['name']);
	$name=($_POST['name']);
	$conn = mysql_connect("localhost","root","") or die ('Error: ' . mysql_error());
	mysql_select_db("csuwebdev", $conn) or die (mysql_error());
	$dbh =  new PDO('mysql:host=localhost;dbname=csuwebdev', 'root', '');
	$stmt = $dbh->prepare("INSERT INTO basichtml (name, filename) VALUES(?,?)");
	$stmt->execute(array($name, $file)); 
	if(move_uploaded_file($_FILES['filename']['tmp_name'], $target)) {
    echo "The file has been uploaded, and your information has been added to the directory";
} else {
    echo "Sorry, there was a problem uploading your file.";
}
?>