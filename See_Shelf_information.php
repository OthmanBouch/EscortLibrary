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
  <title>See shelf inforamtion</title>
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
        <th scope="col">title</th>
        <th scope="col">author</th>
        <th scope="col">status</th>
        <th scope="col">room id</th>
        <th scope="col">shelf position</th>
        <th scope="col">shelf id </th>
        <th scope="col">shelf row</th>
       
      
    </tr>
  </thead>

  <tbody>
<?php
$sql="SELECT title, author, status, room_id, shelf_position, shelf_id, shelf_row FROM `book` INNER JOIN `shelf` ON shelf_num=shelf_id WHERE 1";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $title=$row['title'];
    $author=$row['author'];
    $status=$row['status'];
    $room_id=$row['room_id'];
    $shelf_position=$row['shelf_position'];
    $shelf_id=$row['shelf_id'];
    $shelf_row=$row['shelf_row'];
   

     echo '<tr>

     <th scope="row">'.$title.'</td>
     <th scope="row">'.$author.'</td>
     <th scope="row">'.$status.'</td>
     <th scope="row">'.$room_id.'</td>
     <th scope="row">'.$shelf_position.'</td>
     <th scope="row">'.$shelf_id.'</td>
     <th scope="row">'.$shelf_row.'</td>
     
     
   </tr>';
    


  }
}



?>

  </tbody>
</table>
<button type="button" class="btn btn-secondary"><a href="Librarian_See_Book.php">return to full Book view</a></button>
</body>
</html>