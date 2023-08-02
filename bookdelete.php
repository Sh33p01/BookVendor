<?php
  
  include("dbconn.php");

  $b_code = $_GET['param'];

  $sql = "DELETE FROM books WHERE Book_code = '{$b_code}'";

  $result = mysqli_query($dbconnect, $sql);

  if($result === FALSE){
      echo "DB Error - " . mysqli_connect_error();
      exit();
  }else{
      //The record has been successfully deleted
      session_start();
      $_SESSION['message'] = "Book has been successfully deleted.";
      $_SESSION['msg_type'] = "danger";
      header('location:bookFE.php');
  }

  //closing the connection
  mysqli_close($dbconnect);
  $dbconnect = FALSE;

?>