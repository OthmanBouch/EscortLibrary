<?php
include 'config.php';
session_start();
$username = $_SESSION['user_name'];
if(isset($_GET['ReserveID'])){
     $room_num=$_GET['ReserveID'];

     $sql = " update `user_form` set room_nu='$room_num' where id=(select id from user_form where name = '$username')";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:User_See_Room.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>