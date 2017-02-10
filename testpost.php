<!DOCTYPE html>
<html>

<body>
   <h1>Test POST</h1>
<?php
   if( $_POST["name"] || $_POST["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      echo "Your picture" . $_POST['picture'];
      
      exit();
   }
?>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         Picture: <input type = "" name = "picture" />
         <input type = "submit" />
      </form>
   
   </body>
</html>
