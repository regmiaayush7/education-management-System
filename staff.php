<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="style.css">
   <link href='demo.css' rel='stylesheet' type='text/css'>
    <title>Staff info</title>
  </head>
  <body>
    <?php include "header.php"?>
	<hr class="divider">
	<center><h2>Our Teachers</h2></center>
	<div class="container-fluid">
<div class="accordion" id="accordionExample">
<div class="card">
<?php
    $con = mysqli_connect("localhost", "root", "", "register");
    $sql = "SELECT * FROM staff";
    $result = mysqli_query($con, $sql);
    $row_count = mysqli_num_rows($result);
    $i=1;
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='card-header' id='heading".$i."'>";
      echo "<h2 class='mb-0'>";
      echo "<button class='btn btn-link' type='button' data-toggle='collapse' data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapse".$i."'>";
      echo $row["title"];
      echo "</button></h2></div>";
      echo "<div id='collapse".$i."' class='collapse' aria-labelledby='heading".$i."' data-parent='#accordionExample'>";
      echo "<div class='card-body'>";
      echo $row["details"];
      echo "</div></div>";
      $i++;
    } 
?>
</div>
  </div>
 </div>
<!--	<hr class="divider">
	<div class="container-fluid">

	 <div class="container-fluid">
	    <div class="row">
      <div class="col-lg-2">
       <img src="images/staff/staff1.jpg" class="rounded-circle"  width="140" height="140" alt="Cinque Terre"></div>
        <div class="col-lg-10">
		<h3> <?php include'#'?></h3>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      </div>
	</div>
	</div>
	
	<hr class="divider">
	<div class="container-fluid">
	    <div class="row">
	  <div class="col-lg-10">
		<h3>Heading</h3>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      </div>
      <div class="col-lg-2">
       <img src="images/staff/staff1.jpg" class="rounded-circle"  width="140" height="140" alt="Cinque Terre"></div>
	</div>
	</div>

	<hr class="divider">
	<div class="container-fluid mt-4">
	    <div class="row">
      <div class="col-lg-2">
       <img src="images/staff/staff1.jpg" class="rounded-circle"  width="140" height="140" alt="Cinque Terre"></div>
        <div class="col-lg-10">
		<h3>Heading</h3>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      </div>
	</div>
	</div>

		<hr class="divider">
	<div class="container-fluid">
	    <div class="row">
	  <div class="col-lg-10">
		<h3>Heading</h3>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      </div>
      <div class="col-lg-2">
       <img src="images/staff/staff1.jpg" class="rounded-circle"  width="140" height="140" alt="Cinque Terre"></div>
	</div>
	</div>
	
	<hr class="divider">
	<div class="container-fluid mt-4">
	    <div class="row">
      <div class="col-lg-2">
       <img src="images/staff/staff1.jpg" class="rounded-circle"  width="140" height="140" alt="Cinque Terre"></div>
        <div class="col-lg-10">
		<h3>Heading</h3>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      </div>
	</div>
	</div> -->
		<hr class="divider">
	<?php include "footer.php"?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>