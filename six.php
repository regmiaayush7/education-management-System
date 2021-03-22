<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">    
    <link href='demo.css' rel='stylesheet' type='text/css'>
    <title>Six Result</title>
  </head>
  <body>
  	<?php include 'header.php';?>
  	<hr class="divider">
  		<h3 style="text-align: center;">Results</h3>
<div class="container-fluid">
    <?php
// Database Connection 
$conn = new mysqli('localhost', 'root', '', 'register');
//Check for connection error
$select = "SELECT * FROM files WHERE name='Six.pdf'";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->name;
  $size = $row->size;
}
   $destination = 'uploads/';

echo '<strong>Class: </strong>'.$pdf;
?>
<br/><br/>
<iframe src="<?php echo $destination.$pdf; ?>" width="100%" height="500px">
</iframe>
</div>
<hr class="divider">
    <?php include 'footer.php'?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="dist/simple-lightbox.js"></script>
</html>
