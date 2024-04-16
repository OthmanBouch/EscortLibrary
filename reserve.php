
<?php
include 'config.php';
session_start();
$username = $_SESSION['user_name'];
if(isset($_GET['ReserveID'])){
     $id=$_GET['ReserveID'];

     $sql = " update `book` set  status='Not Available', user_n=(select id from user_form where name = '$username') where id='$id'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:User_return.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>

