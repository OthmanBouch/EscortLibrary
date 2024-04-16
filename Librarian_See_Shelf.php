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
  <title>Librarian_See_Shelf</title>
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
        <a class="nav-link" href="Librarian_See_Room.php">Rooms<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Librarian_See_Event.php">Events<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Librarian_See_Guest.php">Guests<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Librarian_See_Shelf.php">Shelfs<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >Log Out</a>
      </li>
    </ul>
  </div>
</nav>

 <button type="button" class="btn btn-secondary"><a href="Add_shelf.php">Add Shelf</a></button>


 <table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">row</th>
      <th scope="col">position</th>
      <th scope="col">room id</th>
    </tr>
  </thead>

  <tbody>
<?php
$sql="Select * from `shelf` ";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $shelf_id=$row['shelf_id'];
    $shelf_row=$row['shelf_row'];
    $shelf_position=$row['shelf_position'];
    $room_id = $row['room_id'];
     echo '<tr>

     <th scope="row">'.$shelf_id.'</td>
     <td>'.$shelf_row.'</td>
     <td>'.$shelf_position.'</td>
     <td>'.$room_id.'</td>
     <td>

     <button type="button" class="btn btn-warning"><a href="delete_shelf.php? deleteID='.$shelf_id.'">Delete shelf</a></button>
     </td>
   </tr>';
    


  }
}



?>

  </tbody>
</table>
<button type="button" class="btn btn-secondary"><a href="See_Shelf_information.php">See books position in shelfs</a></button>
</body>
</html>