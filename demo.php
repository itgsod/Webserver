<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo sqlite</title>
</head>
<body>
<h1>Just return the number of car inside an arrary</h1>

<?php
$cars = array("Volvo", "BMW", "Toyota", "Renaut","Citroen");
$carslength = count($cars);
for($i=0;$i<$carslength;$i++){
	echo $cars[$i];
	echo '</br>';
}

echo 'There are: ';
echo count($cars);
echo ' cars';
?>
<h1>Looking at the server</h1>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>



</body>
</html>
