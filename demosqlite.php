<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo sqlite</title>
</head>
<body>
<?php


$filename='files.db';
$db = new SQLite3($filename);

$db->open($filename);


class MyDB extends SQLite3
{
	function __construct()
	{
		$this->open($filename);
	}
}

$db = new MyDB();

$db->exec('CREATE TABLE files (id INTEGER PRIMARY KEY, filename TEXT);');
for ($i=0; $i<100; $i++){
	$data = $i."test";

	$db->exec('INSERT INTO files (id,filename) VALUES ($i,"test");');
}

#$statement = $db->prepare('INSERT INTO files (id,filename) VALUES (30,"test30");');

#$statement->execute();


$results = $db->query('SELECT * FROM files;');
while ($row = $results->fetchArray()) {
	var_dump($row);
	echo "<br>";
}

echo "<br>";
var_dump($db->querySingle('SELECT * FROM files WHERE id=3'));
echo "<br>";
print_r($db->querySingle('SELECT * FROM files WHERE id=5', true));

?>
</body>
</html>
