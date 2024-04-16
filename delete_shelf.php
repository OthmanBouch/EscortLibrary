<?php
@include 'config.php';
if(isset($_GET['deleteID'])){
     $shelf_id=$_GET['deleteID'];

     $sql="delete from `shelf` where shelf_id='$shelf_id'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:Librarian_See_Shelf.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>