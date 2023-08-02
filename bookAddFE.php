<?php include("bookAddBE.php");  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookVendor Book Update</title>
        <link rel="stylesheet" href="contacts.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">  
        <form action="" method="POST">
            <h1 class="text-info text-center my-5">Add New Book</h1>
            <div class="mb-3">
                <label for="b_Code" class="form-label">Book Code</label>
                <input type="text" class="form-control" name="b_Code"/>
            </div>
            <div class="mb-3">
                <label for="b_Name" class="form-label">Book Name</label>
                <input type="text" class="form-control" name="b_Name"/>
            </div>
            <div class="mb-3">
                <label for="y_Pub" class="form-label">Year Published</label>
                <input type="text" class="form-control" name="y_Pub"/>
            </div>
            <div class="mb-3">
                <label for="a_Name" class="form-label">Author Name</label>
                <input type="text" class="form-control" name="a_Name"/>
            </div>
            <div class="mb-3">
                <label for="b_Price" class="form-label">Book Price</label>
                <input type="text" class="form-control" name="b_Price"/>
            </div>
            <div class="mb-3">
                <label for="b_Photo" class="form-label">Book Photo</label>
                <input type="file" class="form-control" name="b_Photo"/>
            </div>
            <button type="submit" name="add" class="btn btn-success">Submit</button>
        </form>
</div>
</div>
</body>
</html>