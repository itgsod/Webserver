<?php
//session_start();

if(isset($_POST['submit'])){
    //get pass from file
        if(file_exists('passfile.txt')){
        //open up the file
            if($file_pointer = fopen('passfile.txt','r')){
				
                $pass=fread($file_pointer,32);
                //echo $pass;
                fclose($file_pointer);
                //compare the hashed password against the pass from the form
				//echo md5("hello");
				
                if(md5($_POST['pw'])==$pass){
                    echo "Your password is correct";
                }else{
					echo "Wrong password <br/>";
					echo "read: $pass <br/>";
					echo  md5($_POST['pw']) ;
				}
            }else{
				echo "Error reading the file";
            }
        }else{
            echo "The file doesn't exist";
        }
}
?>
