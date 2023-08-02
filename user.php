<?php include("createUser.php");  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Details</title>
        <link rel="stylesheet" href="contacts.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">  
        <form action="" method="POST">
            <h1 class="text-info text-center my-5">Create Student Details</h1>
            <div class="mb-3">
                <label for="stud_Email" class="form-label">Student Email</label>
                <input type="text" class="form-control" name="stud_Email"/>
            </div>
            <div class="mb-3">
                <label for="stud_Name" class="form-label">Student Name</label>
                <input type="text" class="form-control" name="stud_Name"/>
            </div>
            <div class="mb-3">
                <label for="stud_Number" class="form-label">Student Number</label>
                <input type="text" class="form-control" name="stud_Number"/>
            </div>
            <div class="mb-3">
                <label for="c_Number" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="c_Number"/>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
        </form>
</div>
</div>
</body>
</html>