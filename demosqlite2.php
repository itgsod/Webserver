<!DOCTYPE html>
<html>
<body>
<h1>Test Sqlite</h1>
<?php
print  phpinfo();


$dir = 'sqlite:DBName.db';

$dbh  = new PDO($dir) or die("cannot open the database");
$dbh -> exec("CREATE TABLE Persons
		   (
			PersonID INTEGER PRIMARY KEY,
			LastName varchar(255),
			FirstName varchar(255),
			Address varchar(255),
			City varchar(255)
			)");
             
$dbh -> exec('INSERT INTO Persons (LastName,FirstName,Address,City) VALUES ("Martinet","Philippe","Stockholm ...","Stockholm")');
$dbh -> exec('INSERT INTO Persons (LastName,FirstName,Address,City) VALUES ("Ruby","Mine","Les Ulis ...","Paris")');


 //now output the data to a simple html table...
 
print "<table border=1>";
print "<tr><td>PersonID</td><td>LastName</td><td>FirstName</td><td>Address</td><td>City</td></tr>";

$result = $dbh -> query('SELECT * FROM Persons');

foreach($result as $row)
{
	print "<tr><td>".$row['PersonID']."</td>";	
	print "<td>".$row['FirstName']."</td>";
	print "<td>".$row['LastName']."</td>";
	print "<td>".$row['Address']."</td>";
	print "<td>".$row['City']."</td></tr>";
}

print "</table>";

// close the database connection
$dbh = null;

?>
<input id="query" type="text" width="50"></input>
</br>
<button onclick="sendIt()">Send</button>

<script>
function sendIt(){
	var query=document.getElementById("query").value;
	alert(query);
}
</script>
</body>
</html>
 
 
