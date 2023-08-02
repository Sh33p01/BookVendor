<?php   
   $dbName = "bookvendor";
   $server = "localhost";
   $username = "root";
   $pswd = "";
    //Creating the connection
   $dbconnect = @mysqli_connect($server, $username, $pswd, $dbName);

    //checking the connection
   if($dbconnect === FALSE){
       echo "<p>Connection error: " . mysqli_error($dbconnect) . "</p>";
       @mysqli_close($dbconnect);
       $dbconnect = FALSE;
   }else{
    //echo "Successfiul Connection";
   }

?>