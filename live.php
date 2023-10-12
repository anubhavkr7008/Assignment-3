<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

  <style>
    body { background: url(https://avante.biz/wp-content/uploads/Backgrounds-Food/Backgrounds-Food-053.jpg);
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
                            </tr>
                        
                        <?php
                        }
                        
                        ?>
                    
                </table>               
</div>
</body> 
</html>