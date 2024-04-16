<?php
@include 'config.php';
if(isset($_GET['deleteID'])){
     $event_id=$_GET['deleteID'];

     $sql="delete from `event` where event_id='$event_id'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:Librarian_See_Event.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>