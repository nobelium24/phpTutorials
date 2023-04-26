<?php
$connect = mysqli_connect("localhost", "nobelium24", "oluwatobi", "pizza_project",);
if(!$connect){
    print_r("Connection error: " . mysqli_connect_error());
}
?>