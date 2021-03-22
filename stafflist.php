<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'register');

$sql = "SELECT * FROM staff";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  mysqli_query("DELETE FROM staff WHERE id=$id");
  $_SESSION['message'] = "Address deleted!"; 
  header('location: index.php');
}

  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Staff List</title>
  </head>
  <body>
    <hr class="divider">
    <div class="container">
  		<table class="table table-striped">
<thead>
    <th scope="col">ID</th>
    <th scope="col">Title</th>
    <th scope="col">Details</th>
    <th scope="col">Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td scope="row"><?php echo $file['id']; ?></td>
      <td scope="row"><?php echo $file['title']; ?></td>
      <td scope="row"><?php echo $file['details']; ?></td>
     <td scope="row"><a href="deletestaff.php?id=<?php echo $file["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
  <?php endforeach;?>
</tbody>
</table>
</div>
</body>
</html>

