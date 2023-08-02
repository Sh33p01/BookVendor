<?php include("dbconn.php"); 


if(isset($_POST['a_Email'])){

    $admin_email = $_POST['a_Email'];
    $admin_pass = $_POST['a_Pass'];

    $sql = "SELECT * FROM admin_login WHERE Admin_email = '{$admin_email}' AND Admin_password = '{$admin_pass}'";

    $result = mysqli_query($dbconnect, $sql);

    if(mysqli_num_rows($result) == 1){
        echo "Logged in!";
        header('Location:admin_choice.php');
        exit();
    }
    else{
         echo "You have entered incorrect Email or Password!";
         exit();
    }
}

    /*
    $a_Uname = $a_Pass  = "";
    $a_Uname_error = $a_Pass_error = "";

    $a_UnameValid = FALSE; 
    $a_PassValid = FALSE;

    $stickysa_Uname="";
    $stickysa_Pass="";

    if(isset($_POST['submit'])){
    $stickys_Name=$_POST['$a_Uname'];
    $stickys_Pass=$_POST['$a_Pass'];
    }
    else{
        $stickysa_Uname="";
        $stickysa_Pass="";
    }

    if(isset($_POST('login'))){
        if(!empty($_POST['$a_Uname']) && !empty($_POST['$a_Pass'])){
            $userCheck = mysqli_query($dbconnect, "SELECT * FROM admin_login WHERE Admin_email = '{$_POST['$a_Uname']}'");


            if($adminCheck){
                $s_EmailValid = TRUE;
                if($s_EmailValid){
                    $row=mysqli_fetch_assoc($adminCheck);
                    $hashedPassword = $row['Admin_password'];
                    if(password_verify($_POST['a_Pass'], $hashedPassword)){
                        if($row['Admin_password']){
                            session_start():
                            header('location:admin_choice.php');
                        }
                    }
                    else{
                        echo "You are not a verified admin";
                    }
                }
            
            }
            else{
                $a_Uname_error = $a_Pass_error = "Please insert correct email or password";
            }
        }
    }
    */




?>