<!DOCTYPE html >

<head>
	<title>Test PHP</title>
</head>

<body>
	
<?php
echo "<h1>My first PHP script!</h1>\n";
echo "</br>";
echo "<p>Hello World</p>";
echo "<br/>";
$cars=array("Volvo","BMW","Toyota");

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

</br>
<p>Try a loop</p>

<?php
$cars=array("Volvo","BMW","Toyota","CV");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++){
  echo $cars[$x];
  echo ' ';
}

?>  
</body>

</html>
