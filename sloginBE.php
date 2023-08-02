<?php include("dbconn.php"); 

if(isset($_POST['s_Name'])){

    $stud_Name = $_POST['s_Name'];
    $email = $_POST['s_Email'];
    $pass = $_POST['s_Pass'];

    $sql = "SELECT * FROM user_login WHERE Student_name = '{$stud_Name}' AND Student_email = '{$email}' AND Student_password = '{$pass}'";

    $result = mysqli_query($dbconnect, $sql);

    if(mysqli_num_rows($result) == 1){
        echo "Logged in!";
        header('location:index.php');
        exit();
    }
    else{
         echo "You have entered incorrect Name, Email or Password!";
         exit();
    }
}


/*
if(isset($_POST['s_Name']) && isset($_POST['s_Email']) && isset($_POST['s_Pass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$s_Name = validate($_POST['Student_name']);
$s_Email = validate($_POST['Student_email']);
$s_Pass = validate($_POST['Student_password']);

if(empty($s_Name)){
    header("Location: sloginFE.php?error=User Name is required!");
    exit();
}
else if(empty($s_Email)){
    header("Location: sloginFE.php?error=Email is required!");
    exit();
}
else if(empty($s_Pass)){
    header("Location: sloginFE.php?error=Email is required!");
    exit();
}

$sql = "SELECT * FROM user_login WHERE Student_name = '{$s_Name}' AND Student_email = '{$s_Email}' AND Student_password = '{$s_Pass}'";

$result = mysqli_query($dbconnect, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['Student_name'] === $s_Name && $row['Studet_email'] === $s_Email && $row['Student_password'] === $s_Pass){
        echo "Logged in!";
        $_SESSION['Student_name'] = $row['Student_name'];
        $_SESSION['Studet_email'] = $row['Studet_email'];
        $_SESSION['Student_password'] = $row['Student_password'];
        header("Location: bookstore_main.php");
        exit();
    }
    else{
        header("Location: sloginFE.php?error=Incorrect Username or Password");
        exit();
    }
}
else{
    header("Location: sloginFE.php");
    exit();
}
*/


/*
    $s_Name = $s_Email = $s_Pass  = "";
    $s_Name_error = $s_Email_error = $s_Pass_error = "";

    $s_NameValid = FALSE; 
    $s_EmailValid = FALSE;
    $s_PassValid = FALSE;

    $stickys_Name="";
    $stickys_Email="";
    $stickys_Pass="";

    if(isset($_POST['submit'])){
        $stickys_Name=$_POST['$s_Name'];
    $stickys_Email=$_POST['$s_Email'];
    $stickys_Pass=$_POST['$s_Pass'];
    }
    else{
        $stickys_Name="";
    $stickys_Email="";
    $stickys_Pass="";
    }

    if(isset($_POST('login'))){
        if(!empty($_POST['$s_Email']) && !empty($_POST['$s_Pass'])){
            $userCheck = mysqli_query($dbconnect, "SELECT * FROM user_login WHERE Student_email = '{$_POST['$s_Email']}'");


            if($userCheck){
                $s_EmailValid = TRUE;
                if($s_EmailValid){
                    $row=mysqli_fetch_assoc($userCheck);
                    $hashedPassword = $row['Student_password'];
                    if(password_verify($_POST['s_Pass'], $hashedPassword)){
                        if($row['Student_verified']){
                            session_start():
                            header('location:bookstore_main.php');
                        }
                    }
                    else{
                        echo "You are not a verified student";
                    }
                }
            
            }
            else{
                $s_Email_error = $s_Pass_error = "Please insert correct email or password";
            }
        }
    }

*/

?>
