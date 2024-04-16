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
  <title>See room inforamtion</title>
</head>
<body style="background: url(Image1.jpg);background-repeat: no-repeat;background-size: 100%;">
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

 


 <table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">room number</th>
        <th scope="col">floor</th>
        <th scope="col">hall</th>
        <th scope="col">shelf id</th>
       
      
    </tr>
  </thead>

  <tbody>
<?php
$sql=" SELECT room_num, floor, hall, shelf_id FROM `room` INNER JOIN `shelf` ON room_num=room_id WHERE 1";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $room_num=$row['room_num'];
    $floor=$row['floor'];
    $hall=$row['hall'];
    $shelf_id=$row['shelf_id'];
   
   

     echo '<tr>

     <th scope="row">'.$room_num.'</td>
     <th scope="row">'.$floor.'</td>
     <th scope="row">'.$hall.'</td>
     <th scope="row">'.$shelf_id.'</td>
     
     
   </tr>';
    


  }
}



?>

  </tbody>
</table>
<button type="button" class="btn btn-secondary"><a href="Librarian_See_Room.php">return to full room view</a></button>
</body>
</html>