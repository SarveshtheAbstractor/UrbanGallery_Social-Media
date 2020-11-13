<?php
session_start();

$link = mysqli_connect("Your database Details");

if(mysqli_connect_errno()){
    
    print_r(mysqli_connect_error());
    exit();
} 
if($_GET['function'] == "logout"){
    session_unset();
}
function displayusername() {
           $query = "SELECT username FROM users WHERE id=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
              $data= $result->fetch_assoc();
              echo $data['username'];
  
           }
?>