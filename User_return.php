<?php
 @include 'config.php';
 session_start();

if(!isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){

   header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <link rel="stylesheet" href="css/style3.css">
  <title>User_See_Book</title>
  
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
               <li><a href="User_See_Book.php"><i class="fas fa-sliders-h"></i>Books Available</a></li>
               <li><a href="User_return.php"><i class="fas fa-address-book"></i>Reserved books</a></li>
               <li><a href="User_See_Room.php"><i class="fas fa-cog"></i>Rooms Available</a></li>
               <li><a href="User_Leave.php"><i class="fas fa-stream"></i>Reserved rooms</a></li>
               <li><a href="User_See_Event.php"><i class="fas fa-user"></i>Events Available</a></li>
               <li><a href="Leave_Event.php"><i class="fas fa-globe-europe"></i>Reserved Events</a></li>
               <li><a href="About.php"><i class="fas fa-envelope"></i>About EscortLibrary</a></li>
               <li><a href="logout.php">Log Out</a></li>
               <h1><span> <?php echo $_SESSION['user_name'] ?></span></h1>
            
            </ul>
         </nav>
      </div>

 <br>
 
 <br>
 <br>
<br>
<h1 style="text-align: center; color:firebrick">Reserved Books</h1>
 <p><kbd> Search for book </kbd> <input class="form-control" id="myInput" type="text" placeholder="Search.."></p>

 <table class="table table-light table-hover">
 <caption>List of books you used</caption>
  <thead>
    <tr>

      <th scope="col" style="text-shadow: 5px 5px 10px orange;">title</th>
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">author</th>
      <th scope="col" style="text-shadow: 5px 5px 10px orange;">booked by</th>
      
     
    </tr>
  </thead>

  <tbody id="myTable">
<?php
include 'config.php';

$username = $_SESSION['user_name'];


$sql="SELECT title, author, name  FROM `book`INNER join `user_form` ON book.user_n=user_form.id WHERE name='$username';";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    
    $title=$row['title'];
    $author=$row['author'];
    $name=$row['name'];
   
 
     echo '<tr>

     
     <td>'.$title.'</td>
     <td>'.$author.'</td>
     <td>'.$name.'</td>
    

     <td>
     <button type="button" class="btn btn-light"><a href="Cancel_reservation.php? CancelID='.$title.'">Remove from reservation</a></button>
     </td>
     
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