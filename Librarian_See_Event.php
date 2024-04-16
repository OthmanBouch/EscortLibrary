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

 <button type="button" class="btn btn-secondary"><a href="Add_event.php">Add Event</a></button>


 <table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">event ID</th>
      <th scope="col">event Name</th>
      <th scope="col">event Topic</th>
      <th scope="col">guest ID</th>
      <th scope="col">Date</th>
    </tr>
  </thead>

  <tbody>
<?php
$sql="Select * from `event` ";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $event_id=$row['event_id'];
    $event_name=$row['event_name'];
    $event_topic=$row['event_topic'];
    $guest_id=$row['guest_id'];
    $event_date=$row['event_date'];
     echo '<tr>

     <th scope="row">'.$event_id.'</td>
     <td>'.$event_name.'</td>
     <td>'.$event_topic.'</td>
     <td>'.$guest_id.'</td>
     <td>'.$event_date.'</td>
     <td>
     <button type="button" class="btn btn-link"><a href="update_event.php? updateID='.$event_id.'">Update Event</a></button>

     <button type="button" class="btn btn-warning"><a href="delete_event.php? deleteID='.$event_id.'">Delete Event</a></button>
     </td>
   </tr>';
    


  }
}



?>

  </tbody>
</table>
<button type="button" class="btn btn-secondary"><a href="See_Event_information.php">See Event Information</a></button>
</body>
</html>