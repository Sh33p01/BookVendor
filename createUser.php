<?php
 include("dbconn.php");

  $errorCount = 0;
  $stud_Email_error = $stud_Name_error = $stud_Number_error = $c_Number_error = "";
  $stud_Email = $stud_Name = $stud_Number = $c_Number = "";

  if(isset($_POST["submit"])){
    if(empty($_POST['stud_Email'])){
        $stud_Email_error = "Please insert your Student Email.";
        $errorCount++;
    }else{

        $stud_Email = $_POST['stud_Email'];
    }

    if(empty($_POST['stud_Name'])){
        $stud_Name_error = "Please insert your Name.";
        $errorCount++;
    }else{
        $stud_Name = $_POST['stud_Name'];
    }

    if(empty($_POST['stud_Number'])){
        $stud_Number_error = "Please insert your Student Number";
        $errorCount++;
    }else{
        $stud_Number = $_POST['stud_Number'];
    }

    if(empty($_POST['c_Number'])){

        $c_Number_error = "Please insert you Contact Number.";
        $errorCount++;
    }else{
        $c_Number = $_POST['c_Number'];
    }


    if($errorCount == 0){
        //query for inserting into a table
        $sql = "INSERT INTO user_info (Student_email, Student_name, Student_number, Contact_number)
                VALUES ('$stud_Email', '$stud_Name', '$stud_Number', '$c_Number')";
    

      //executing the query
      $dbResult = mysqli_query($dbconnect, $sql);

      if ($dbResult === FALSE) {
        echo "Error inserting details into the database: ". mysqli_connect_error();
      } else { 
        //echo "User details saved successfully.";
        session_start();
        $_SESSION['message'] = "User has been successfully created.";
        $_SESSION['msg_type'] = "success";
        header('location:studentFE.php');
      }

        //closing the connection
        mysqli_close($dbconnect);
        $dbconnect = FALSE;
    }
    unset($_POST["submit"]);
 }

/*

    $stud_Email = $_POST['Student_email'];
    $stud_Name = $_POST['Student_name'];
    $stud_Number = $_POST['Student_number'];
    $c_Number = $_POST['Contact_number'];

    $sql = "INSERT INTO user_info (Student_email, Student_name, Student_number, Contact_number)
                VALUES ('$stud_Email', '$stud_Name', '$stud_Number', '$c_Number')";

    $dbResult = mysqli_query($dbconnect, $sql);

    if ($dbResult == true) {
        session_start();
        $_SESSION['message'] = "User has been successfully created.";
        $_SESSION['msg_type'] = "success";
        header('location:index.php');
        
      } else { 
        //echo "User details saved successfully.";
        echo "Error inserting details into the database: ". mysqli_connect_error();
      }

        //closing the connection
        mysqli_close($dbconnect);
        $dbconnect = FALSE;
        unset($_POST["submit"]);
*/

?>