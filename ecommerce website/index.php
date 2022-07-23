<?php
require_once('productinfo.php');
require_once('CreateDatabase.php');

//create instance of createdb class

$database=new CreateDb();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/12d0fc52bb.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<title>OMAHA</title>

</head>
<body>
    <div class="container">
        <div class="row text-center py-5">
        
           <?php
           $result=$database->GetInfo();
           while($row=mysqli_fetch_assoc($result))
           {
            Information($row['ProductName'],$row['ProductPrice'],$row['ProductImage']);
           }
           ?>
         

        </div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
</body>
</html>