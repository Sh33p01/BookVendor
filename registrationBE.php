<?php
 include("dbconn.php");


 /*
{

    $s_Name = $s_Email = $s_Pass = $s_Passrepeat = "";
    $s_Name_error = $s_Email_error = $s_Pass_error = $s_Passrepeat_error = "";

    $s_NameValid = FALSE; 
    $s_EmailValid = FALSE;
    $s_PassValid = FALSE;
    $s_PassrepeatValid = FALSE;

    $stickys_Name="";
    $stickys_Email="";
    $stickys_Pass="";
    $stickys_Passrepeat="";

    if(isset($_POST['submit'])){
        $stickys_Name=$s_Name;
    $stickys_Email=$s_Email;
    $stickys_Pass=$s_Pass;
    $stickys_Passrepeat=$s_Passrepeat;
    }

    if(isset($_POST['register'])){

    

    if(!empty($_POST['s_Name'])){
        if(preg_match("/^[a-zA-z]*$/",$_POST['s_Name'])==1){
            $s_NameValid=TRUE;
            echo "<p> Name</p>";
        }
        else{
            $s_Name_error = "Please insert the correct name: ";
        }
    }
    else{
        $s_Name_error = "Please insert the correct name"
    }

    if(!empty($_POST['s_Email'])){
        if(filter_var($_POST['$s_Email'], FILTER_VALIDATE_EMAIL === FALSE )){
            $s_Email_error = "Please insert the correct Email: ";
        }
        else{
            $Squery = "SELECT * FROM user_login WHERE Student_email = {$_POST['$s_Email']}";
            if(mysqli_query($dbconnect, $Squery)){
                $s_Email_error = "Email already exists";
            }
            else{
                $s_EmailValid = TRUE;
                echo "<p>Email</p>";
            }
        }
    }
    else{
        $s_Email_error = "Please insert the correct Email"
    }

    if(!empty($_POST['s_Pass'])&&!empty($_POST['s_Passrepeat'])){
       if($_POST['s_Pass'] ==  $_POST['s_Passrepeat']){
            $s_PassValid = TRUE;
            echo "<p> Name</p>";
            
       }
        
        else{
            $s_Pass_error = "The passwords don't match: ";
        }
    }
    else{
        $s_Pass_error = "Please insert the Password"
    }

  

    if($s_PassValid && $s_EmailValid && $s_NameValid){
        $s_Pass = $_POST['s_Pass'];
        $s_Email = $_POST['$s_Email'];
        $s_Name = $_POST['s_Name'];
        echo "<p>Hello there</p>";
        $sql = "INSERT INTO user_login (Student_name, Student_email, Student_password )
        VALUES ('$s_Name','$s_Email', '$s_Pass')";

    $dbResult = mysqli_query($dbconnect, $sql);

    if ($dbResult === FALSE) {
        echo "Error inserting details into the database: ". mysqli_connect_error();
    } else { 
        //echo "User details saved successfully.";
        session_start();
        $_SESSION['message'] = "User has been successfully created.";
        $_SESSION['msg_type'] = "success";
        header('location:sloginFE.php');
    }
    }
}

      

        //closing the connection
        mysqli_close($dbconnect);
        $dbconnect = FALSE;
    unset($_POST["register"]);
 }

 */

$errorCount = 0;
$s_Name = $s_Email = $s_Pass = $s_Passrepeat = "";
$s_Name_error = $s_Email_error = $s_Pass_error = $s_Passrepeat_error = "";


if(isset($_POST["register"])){
    if(empty($_POST['s_Name'])){
        $s_Name_error = "Please insert your Name";
        $errorCount++;
    }else{

        $s_Name = $_POST['s_Name'];
    }

    if(empty($_POST['s_Email'])){
        $s_Email_error = "Please insert your Email.";
        $errorCount++;
    }else{
        $s_Email = $_POST['s_Email'];
    }

    if(empty($_POST['s_Pass'])){
        $s_Pass_error = "Please insert your Password.";
        $errorCount++;
    }else{
        $s_Pass = $_POST['s_Pass'];
    }

    if(empty($_POST['s_Passrepeat'])){
        $s_Passrepeat_error = "Please insert your Password again.";
        $errorCount++;
    }else{
        $s_Passrepeat = $_POST['s_Passrepeat'];
    }

    

    if($s_Pass === $s_Passrepeat){
        if($errorCount == 0){
            $hash = password_hash($s_Pass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user_login (Student_name, Student_email, Student_password, Student_verified)
                VALUES ('$s_Name', '$s_Email', '$hash', '1')";


            $dbResult = @mysqli_query($dbconnect, $sql);

            if($dbResult === FALSE){
                echo "Error registering student to database!" .@mysqli_connect_error();
            }else{
                echo "User has been registered!";
                header('location:sloginFE.php');
            }

            $s_Name = $s_Email = $s_Pass = $s_Passrepeat = "";
            mysqli_close($dbconnect);
            $dbconnect = FALSE;

        }
    }else{
        echo "Password do not match! Try again";
    }


}

unset($_POST['register']);


?>