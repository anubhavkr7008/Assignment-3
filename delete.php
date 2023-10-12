<?php

include 'dbcon.php';

$No = $_GET['No'];

$deletequery = "delete from item where No=$No";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
    <script>
         alert('Deleted Successfull');
    </script>
    <?php
}else{
    echo ("No Deleted");
}

?>