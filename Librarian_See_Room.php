<?php
 @include 'config.php';
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
  <title>Librarian_See_Book</title>
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

 <button type="button" class="btn btn-secondary"><a href="Add_room.php">Add Room</a></button>


 <table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">Room_num</th>
      <th scope="col">Floor</th>
      <th scope="col">Hall</th>
      <th scope="col">Room ID</th>
    </tr>
  </thead>

  <tbody>
<?php
$sql="Select * from `room` ";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $room_num=$row['room_num'];
    $floor=$row['floor'];
    $hall=$row['hall'];
    $roomid=$row['roomid'];
     echo '<tr>

     <th scope="row">'.$room_num.'</td>
     <td>'.$floor.'</td>
     <td>'.$hall.'</td>
     <td>'.$roomid.'</td>
     <td>
     <button type="button" class="btn btn-link"><a href="update_room.php? updateID='.$room_num.'">Update room</a></button>

     <button type="button" class="btn btn-warning"><a href="delete_room.php? deleteID='.$room_num.'">Delete room</a></button>
     </td>
   </tr>';
    


  }
}



?>

  </tbody>
</table>

<button type="button" class="btn btn-secondary"><a href="See_Room_information.php">See shelfs in rooms </a></button>
</body>
</html>