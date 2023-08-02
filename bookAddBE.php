<?php
 include("dbconn.php");

    $errorCount = 0;
    $b_Code_error = $b_Name_error = $y_Pub_error = $a_Name_error = $b_Price_error = $b_Photo_error = "";
    $b_Code = $b_Name = $y_Pub = $a_Name = $b_Price = $b_Photo = "";


    if(isset($_POST["add"])){
        if(empty($_POST['b_Code'])){
            $b_Code_error = "Please insert the book's code.";
            $errorCount++;
        }else{

            $b_Code = $_POST['b_Code'];
        }

        if(empty($_POST['b_Name'])){
            $b_Name_error = "Please insert the book's name.";
            $errorCount++;
        }else{
            $b_Name = $_POST['b_Name'];
        }

        if(empty($_POST['y_Pub'])){
            $y_Pub_error = "Please insert the year published";
            $errorCount++;
        }else{
            $y_Pub = $_POST['y_Pub'];
        }

        if(empty($_POST['a_Name'])){

            $a_Name_error = "Please insert the author's name.";
            $errorCount++;
        }else{
            $a_Name = $_POST['a_Name'];
        }

        if(empty($_POST['b_Price'])){

            $b_Price_error = "Please insert a Price.";
            $errorCount++;
        }else{
            $b_Price = $_POST['b_Price'];
        }

        if(empty($_POST['b_Photo'])){

            $b_Photo_error = "Please insert a photo";
            $errorCount++;
        }else{
            $b_Photo = $_POST['b_Photo'];
        }


    if($errorCount == 0){
        //query for inserting into a table
        $sql = "INSERT INTO books (Book_code, Book_name, Year_published, Author_name, Price, Book_photo)
                VALUES ('$b_Code', '$b_Name', '$y_Pub', '$a_Name', '$b_Price', '$b_Photo')";
    

      //executing the query
      $dbResult = mysqli_query($dbconnect, $sql);

      if ($dbResult === FALSE) {
        echo "Error inserting details into the database: ". mysqli_connect_error();
      } else { 
        //echo "User details saved successfully.";
        session_start();
        $_SESSION['message'] = "New book has been successfully created.";
        $_SESSION['msg_type'] = "success";
        header('location:bookFE.php');
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