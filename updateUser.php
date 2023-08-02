<?php
    include("dbconn.php");

    $errorCount = 0;
    $stud_Email_error = $stud_Name_error = $stud_Number_error = $c_Number_error = "";
    $stud_Email = $stud_Name = $stud_Number = $c_Number = "";

    $stud_Email= $_GET['param'];

    $sql = "SELECT * FROM user_info WHERE Student_email =  '{$stud_Email}'";

    if($dbconnect === FALSE){
        echo "DB Error - " . mysqli_connect_error();
        exit();
    }

    $result = mysqli_query($dbconnect, $sql);

    $row = mysqli_fetch_assoc($result);

    $stud_Email = $row['Student_email'];
    $stud_Name = $row['Student_name'];
    $stud_Number = $row['Student_number'];
    $c_Number = $row['Contact_number'];
  
    if(isset($_POST["update"])){
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
            //query for updating into a table
            $sql = "UPDATE user_info 
                SET Student_email = '$stud_Email',
                    Student_name = '$stud_Name',
                    Student_number = '$stud_Number',
                    Contact_number = '$c_Number'
                WHERE Student_email = '$stud_Email'"; 
                        

        //executing the query
        $dbResult = mysqli_query($dbconnect, $sql);

        if ($dbResult === FALSE) {
            echo "Error updating details into the database: ". mysqli_connect_error();
        } else { 
            //echo "User details updated successfully.";
            session_start();
            $_SESSION['message'] = "User has been successfully updated.";
            $_SESSION['msg_type'] = "warning";
            header('location:studentFE.php');
        }

            //closing the connection
            mysqli_close($dbconnect);
            $dbconnect = FALSE;
        }
        unset($_POST["submit"]);
    }


?>