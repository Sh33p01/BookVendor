<?php
    include("dbconn.php");

    $errorCount = 0;
    $b_Code_error = $b_Name_error = $y_Pub_error = $a_Name_error = $b_Price_error = $b_Photo_error = "";
    $b_Code = $b_Name = $y_Pub = $a_Name = $b_Price = $b_Photo = "";

    $b_Code = $_GET['param'];

    $sql = "SELECT * FROM books WHERE Book_code = '{$b_Code}'";

    if($dbconnect === FALSE){
        echo "DB Error - " . mysqli_connect_error();
        exit();
    }

    $result = mysqli_query($dbconnect, $sql);

    $row = mysqli_fetch_assoc($result);

    $b_Code = $row['Book_code'];
    $b_Name = $row['Book_name'];
    $y_Pub = $row['Year_published'];
    $a_Name = $row['Author_name'];
    $b_Price = $row['Price'];
    $b_Photo = $row['Book_photo'];

    
  
    if(isset($_POST["update"])){
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
            //query for updating into a table
            $sql = "UPDATE books 
                SET Book_code = '$b_Code',
                    Book_name = '$b_Name',
                    Year_published = '$y_Pub',
                    Author_name = '$a_Name'
                    Price = '$b_Price',
                    Book_photo = '$b_Photo'
                WHERE Book_code = '$b_Code'"; 
                        



        //executing the query
        $dbResult = mysqli_query($dbconnect, $sql);


        if ($dbResult === FALSE) {
            echo "Error updating details into the database: ". mysqli_connect_error();
        } else { 
            //echo "User details updated successfully.";
            session_start();
            $_SESSION['message'] = "Book has been successfully updated.";
            $_SESSION['msg_type'] = "warning";
            header('location:bookFE.php');
        }

            //closing the connection
            mysqli_close($dbconnect);
            $dbconnect = FALSE;
        }
        unset($_POST["submit"]);
    }


?>