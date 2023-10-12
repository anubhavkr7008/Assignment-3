<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

$item = $_POST['item'];
$price = $_POST['price'];
}

$insertuery = "insert into item (item,price) values('$item','$price')";


$query = mysqli_query($con,$insertuery);

if($query){
    ?>
    <script>
         alert('Inserted');
    </script>
    <?php
}else{
    echo "Not Insertd";
}


?>