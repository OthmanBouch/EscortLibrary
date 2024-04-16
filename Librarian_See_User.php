<?php
 @include 'config.php';
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
  <title>Librarian_See_User</title>
</head>
<body style="background: url(Image2.jpg);background-repeat: no-repeat;background-size: 100%;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin_page.php">EscortLibrary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Librarian_See_User.php">Users<span class="sr-only">(current)</span></a>
      </li>              
      <li class="nav-item active">
        <a class="nav-link" href="Librarian_See_Book.php">Books <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Librarian_See_Room.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Librarian_See_Event.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Librarian_See_Guest.php">Guests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Librarian_See_Shelf.php">Shelfs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >Log Out</a>
      </li>
    </ul>
  </div>
</nav>

 <button type="button" class="btn btn-secondary"><a href="Add_User.php">Add User</a></button>
<!-- search bar here -->
 <p><kbd> Search for user </kbd> <input class="form-control" id="myInput" type="text" placeholder="Search.."></p>
 <!-- msut add an id to get input and add another input the <tbody id=""> for search we end with the jquery code for search -->
 <table class="table table-hover table-dark">

  <thead>

    <tr>

      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">User Type</th>
      <th scope="col">room number</th>
      <th scope="col">event number</th>
      
    </tr>
  </thead>
 

  <tbody id="myTable">
<?php
$sql="Select * from `user_form` where user_type = 'user' ";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    $user_type=$row['user_type'];
    $room_nu=$row['room_nu'];
    $event_nu = $row['event_nu'];
     echo '<tr>

     <th scope="row">'.$id.'</th>
     <td>'.$name.'</td>
     <td>'.$email.'</td>
     <td>'.$password.'</td>
     <td>'.$user_type.'</td>
     <td>'.$room_nu.'</td>
     <td>'.$event_nu.'</td>
     <td>
     <button type="button" class="btn btn-link"><a href="update_user.php? updateID='.$id.'">Update User</a></button>

     <button type="button" class="btn btn-warning"><a href="delete_user.php? deleteID='.$id.'">Delete User</a></button>
     </td>
   </tr>';
    
   

  }
 
}



?>

  </tbody>
</table>
<!-- jquery search code from a table  -->
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