<?php

$server="localhost";
$user="root";
$password= "";
$db="signup";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>
        alert(" succesful ")
        </script>
    <?php
}else{
    ?>
    <script>
        alert(" not ")
        </script>
    <?php
}


?>