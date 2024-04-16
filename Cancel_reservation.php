<?php
@include 'config.php';
if(isset($_GET['CancelID'])){
     $title=$_GET['CancelID'];

     $sql = " update `book` set  status='Available', user_n='0' where title='$title'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:User_return.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>