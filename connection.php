<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="pure_water";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    // echo "connection ok";
}
else
{
    echo " conection failed" .mysqli_connect_error();
}
?>