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
            <h1 class="text-info text-center my-5">Book Details</h1>
            <button type="submit" name="create" class="btn btn-primary"><a href="bookAddFE.php" class="text-light">Add Book</a></button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Book Code</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Year Published</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Book Photo</th>
                    </tr>
                </thead>

                <?php 
                    $sql = "SELECT * FROM books ORDER BY Book_code";

                    if($dbconnect === FALSE){
                        echo  "DB Error - " . mysqli_connect_error();
                        exit();
                    }

                    $result = mysqli_query($dbconnect, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                        $b_Code = $row['Book_code'];
                        $b_Name = $row['Book_name'];
                        $y_Pub = $row['Year_published'];
                        $a_Name = $row['Author_name'];
                        $b_Price = $row['Price'];
                        $b_Photo = $row['Book_photo'];

                        
                        
                        echo '<tbody>
                                    <tr>
                                        <th scope="row">'.$b_Code.'</th>
                                        <td>'.$b_Name.'</td>
                                        <td>'.$y_Pub.'</td>
                                        <td>'.$a_Name.'</td>
                                        <td>'.$b_Price.'</td>
                                        <td>'.$b_Photo.'</td>
                                        <td><button type="update" name="update" class="btn btn-primary"><a href="bookupdateFE.php?param='.$b_Code.'" class="text-light">Update</a></button>&nbsp;&nbsp;<button type="update" name="update" class="btn btn-danger"><a href="bookdelete.php?param='.$b_Code.'" class="text-light">Delete</a></button></td>

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