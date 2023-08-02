<?php include("dbconn.php");  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookVendor</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">  

    <?php
        session_start();
        if(isset($_SESSION['message'])){
            echo '<div class="alert alert-'.$_SESSION['msg_type'].'">'.$_SESSION['message'].'</div>';
            unset($_SESSION['message']);
        }
    ?>

        <form action="" method="POST">
            <h1 class="text-info text-center my-5">Student Details</h1>
            <button type="submit" name="create" class="btn btn-primary"><a href="user.php" class="text-light">Create User</a></button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Student Email</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Number</th>
                        <th scope="col">Contact Number</th>
                    </tr>
                </thead>

                <?php 
                    $sql = "SELECT * FROM user_info ORDER BY Student_email";

                    if($dbconnect === FALSE){
                        echo  "DB Error - " . mysqli_connect_error();
                        exit();
                    }

                    $result = mysqli_query($dbconnect, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                        $stud_Email = $row['Student_email'];
                        $stud_Name = $row['Student_name'];
                        $stud_Number = $row['Student_number'];
                        $c_Number = $row['Contact_number'];

                        
                        
                        echo '<tbody>
                                    <tr>
                                        <th scope="row">'.$stud_Email.'</th>
                                        <td>'.$stud_Name.'</td>
                                        <td>'.$stud_Number.'</td>
                                        <td>'.$c_Number.'</td>
                                        <td><button type="update" name="update" class="btn btn-primary"><a href="update.php?param='.$stud_Email.'" class="text-light">Update</a></button>&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-danger"><a href="delete.php?param='.$stud_Email.'" class="text-light">Delete</a></button></td>
                                    </tr>
                                </tbody>';
                    }
                ?>
            </table>          
        </form>
</div>
</div>
</body>
</html>