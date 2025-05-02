<?php
$conn =mysqli_connect("localhost","root","","booking");
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>