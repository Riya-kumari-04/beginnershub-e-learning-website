<?php


$username = "root";
$password = "";
$server ='localhost';
$db = 'mydatabase';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    //echo "Connection Successfull";
    ?>
    <script>
        alert('Connection Successfull');
    </script>

    <?php

    
}else{
    echo "NO connection";
}



?>

