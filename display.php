<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

  <style>
    body { background: url(https://avante.biz/wp-content/uploads/Backgrounds-Food/Backgrounds-Food-053.jpg);
        /* background-repeat: no-repeat; */
        background-size: cover;
   }
    .container{ 
        width: auto; height: 100%; color: black;  left: 38%; position: absolute; transform: translate (-50%, -50%); 
        box-sizing: border-box; padding: 20px 30px; text-align: center;
        border:5px solid black;
        font-size:30px;
        justify-content: top;
        
}

.py-3text-white
{
    padding: 7px;
}
.color1{ 
color:green;
}
.color2{ 
    color:red;
}
</style>

<body>
  

<div class="container">
            <h1>Food Items</h1>
                <table>
                    <thead class="bg-dark"> 
                        <tr>
                            <th class="py-3text-white">  Id</th>
                            <th class="py-3text-white">  Item</th>
                            <th class="py-3text-white">  Price</th> 
                            <th class="py-3text-white">  Edit</th>
                            <th class="py-3text-white">  Delete</th>  
                            <br>
                        </tr>
                    </thead>
                        <?php

                        include 'dbcon.php';
                        
                        $selectquery = "select * from item";
                        
                        $query = mysqli_query($con,$selectquery);
                        
                        while($result = mysqli_fetch_array($query)){
                        ?>
                            <tr> <br>
                                <td> <?php echo $result['No']; ?> </td>
                                <td> <?php echo $result['item']; ?> </td>
                                <td> <?php echo $result['price']; ?> </td><br>
                                <td> <a class="color1" href="operation.php?No=<?php echo $result['No']; ?>"> 
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                <td> <a class="color2" href="delete.php?No=<?php echo $result['No']; ?>"> 
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                            </tr>
                        
                        <?php
                        }
                        
                        ?>    
                </table>      
                <a href="menu.html"target="_blank"> Add food item</a>         
</div>
</body> 
</html>