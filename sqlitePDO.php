<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Test php with Sqlite3</title>
</head>

<body>
<form action="sqlitePDO.php" method="POST">
	<p>Your name: <input type="text" name="name" /></p>
</form>


<?php
$dir = 'sqlite:./students.sqlite';
$dbh  = new PDO($dir) or die("cannot open the database");
$dbh ->exec("CREATE TABLE IF NOT EXISTS students(id INTEGER PRIMARY KEY,name TEXT)");

$name = $_POST["name"];

$dbh -> exec("INSERT INTO students (name) VALUES ('$name')");

$results = $dbh -> query("SELECT * FROM students");

foreach($results as $row){
	
	echo "Id: " . $row['id'] . " name: " . $row['name'] . "<br/>";

}

//$dbh -> exec("DROP TABLE students");

// Close
$dbh = null;
?>

</body>
</html>
