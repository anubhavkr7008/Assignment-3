
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body { background: url(https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);
   }
    .col-md-6{ 
        width: 250px; height: 300px; color: #fff; top: 30.5%; left: 42%; position: absolute; transform: translate (-50%, -50%); 
        box-sizing: border-box; padding: 20px 30px; text-align: center;
        border:5px solid black;
        
}
.form-group{
    padding: 10px 5px; text-align: center;
}

.form-control
{
    padding: 4px;
}
</style>
<body>
        <form action="" method="POST">
            <div class="col-md-6"> 
        
            <?php

include 'dbcon.php';

$No = $_GET['No'];

$selectquery = "select * from item where No=$No";
                        
$query = mysqli_query($con,$selectquery);

$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
    $No = $_GET['No'];
$item = $_POST['item'];
$price = $_POST['price'];
}

// $insertuery = "insert into item (item,price) values('$item','$price')";

$updatequery = "update item set No=$No,item='$item',price='$price' where No=$No";

$query = mysqli_query($con,$updatequery);

if($query){
    ?>
<a href="display.php" target="_blank"></a>
    <script>
         alert('Update Successfull');
    </script>
    <?php
}else{
    echo "No update";
}


?>
    <div class="form-group"> 
        <input type="text" class="form-control" placeholder="Enter Food Item" name="item" value="<?php echo $result['item'];?>" required/> 
    </div>
    <div class="form-group">           
        <input type="price" class="form-control" placeholder="Price of Food" name="price" value="<?php echo $result['price'];?>" required/>           
    </div> 
        <input type="submit" class="btnRegistet" name="submit" value="update"/>
    </div> 
    </div>
    </form>
</body>
</html>