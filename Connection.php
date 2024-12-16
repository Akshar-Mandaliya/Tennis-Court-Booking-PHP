<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tennis";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo "";
}
else{
    echo "Not Connection ..";
}
?>