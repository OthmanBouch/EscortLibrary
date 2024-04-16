<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>User page</title>
      <link rel="stylesheet" href="css/style3.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
   </head>
   
   <body style="background: url(Image3.jpg);background-repeat: no-repeat;background-size: 100%;">
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
            <h3> <a href="user_page.php" style="color: black;">Escort<span style="color: brown;">Library</span></a></h3>
            </div>
            <ul class="list-items">
               <li><a href="user_page.php"><i class="fas fa-home"></i>Home</a></li>
               <li><a href="User_See_Book.php"><i class="fas fa-book"></i>Books Available</a></li>
               <li><a href="User_return.php"><i class="fas fa-book"></i>Reserved books</a></li>
               <li><a href="User_See_Room.php"><i class="fas fa-home"></i>Rooms Available</a></li>
               <li><a href="User_Leave.php"><i class="fas fa-home"></i>Reserved rooms</a></li>
               <li><a href="User_See_Event.php"><i class="fas fa-user"></i>Events Available</a></li>
               <li><a href="Leave_Event.php"><i class="fas fa-user"></i>Reserved Events</a></li>
               <li><a href="About.php"><i class="fas fa-envelope"></i>About EscortLibrary</a></li>
               <li><a href="logout.php">Log Out</a></li>
               <h1><span style="color:goldenrod ;"><?php echo $_SESSION['user_name'] ?></span></h1>
            </ul>
         </nav>
      </div>
               
      <br>
      <br>
      <br>
      <br>
      <br>
      <H1 style="text-align:  center; color:firebrick;">List of Books</H1>
      <p><kbd> Search for event </kbd> <input class="form-control" id="myInput" type="text" placeholder="Search.."></p>

 <table class="table table-light table-hover">
 <caption>List of books</caption>
  <thead>
    <tr>
      
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">book id</th>  
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">book title</th>
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">author</th>
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">field</th>
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">status </th>
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">shelf position</th>
      
  
    </tr>
  </thead>

  <tbody id="myTable">
<?php
include 'config.php';

$username = $_SESSION['user_name'];

$sql="SELECT id, title, author, field, status, shelf_num  FROM book;";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $title=$row['title'];
    $author=$row['author'];
    $field=$row['field'];
    $status=$row['status'];
    $shelf_num=$row['shelf_num'];
 
     echo '<tr>

     <td>'.$id.'</td>
     <td>'.$title.'</td>
     <td>'.$author.'</td>
     <td>'.$field.'</td>
     <td>'.$status.'</td>
     <td>'.$shelf_num.'</td>
    
     
   </tr>';
   
  }
}



?>

  </tbody>
</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
   </body>


</html>

