<!DOCTYPE html>
   <?php
        // Open file
        section_start();
        
        if(isset($_POST['submit'])){
	    //get pass from file
        if(file_exists('passfile.txt')){

            if($file_pointer = fopen('passfile.txt','r')){
                $pass=fread($file_pointer,15);
            //echo $pass;
        fclose($file_pointer);
        //compare the hashed password against the pass from the form
            if(md5($_POST['pw'])==$pass){
                header("location:editor.php");
            }
            }else{
                echo "An error occurred while reading the file";
            }
        }else{
            echo "Could not carry out the file operation because file does not exists.";
        }  //fileexists
        
    ?>
    
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form action="testlogin.php" method="post">
            <button name="mybutton" type="submit">Submit</button>
            <input type="password" value="Write your password" name="pwd"/>
        </form>
    </body>
</html>
