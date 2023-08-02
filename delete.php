<?php
  
  include("dbconn.php");

  $stud_Email = $_GET['param'];

  $sql = "DELETE FROM user_info WHERE Student_email = '{$stud_Email}'";

  $result = mysqli_query($dbconnect, $sql);

  if($result === FALSE){
      echo "DB Error - " . mysqli_connect_error();
      exit();
  }else{
      //The record has been successfully deleted
      session_start();
      $_SESSION['message'] = "User has been successfully deleted.";
      $_SESSION['msg_type'] = "danger";
      header('location:studentFE.php');
  }

  //closing the connection
  mysqli_close($dbconnect);
  $dbconnect = FALSE;

?>