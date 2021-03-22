<?php include 'loginvalidation.php'?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
        h3{
            margin-top: 4rem;
            margin-bottom: 1rem;
            text-align: center;
          }
              .card-img-top {
                 width: 100%;
                height: 45vh;
                object-fit: cover;
          }
    </style>
    <title>Admin Dashboard</title>
  </head>
  <body>
<?php include 'adminnav.php'?>
<div class="container-fluid mt-3">
    <p><h3> Welcome to the Admin Dashboard</h3></p>
</div>
<div class="container-fluid mt-3">
<div class="row ml-2">
<div class="card col-lg-3" style="width: 18rem;">
  <img src="./images/adimg1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gallery</h5>
    <p class="card-text">Click the button below to update in Gallery </p>
    <a href="gallery.php" class="btn btn-primary">Click Here</a>
  </div>
</div>
<div class="card col-lg-3" style="width: 18rem;">
  <img src="./images/adimg2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Result</h5>
    <p class="card-text">click the button below to update results</p>
    <a href="result.php" class="btn btn-primary">Click Here</a>
  </div>
</div>
<div class="card col-lg-3" style="width: 18rem;">
  <img src="./images/adimg3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Upcoming Events</h5>
    <p class="card-text">Click the button below to update events</p>
    <a href="event.php" class="btn btn-primary">Click Here</a>
  </div>
</div>
 <div class="card col-lg-3" style="width: 18rem;">
  <img src="./images/adimg4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update Teachers Info </h5>
    <p class="card-text">Click the button below to update Teachers info</p>
    <a href="updateteacher.php" class="btn btn-primary">Click Here</a>
  </div>
   </div>
  </div>
</div>
        
       <?php include 'navigation.php'?>
       <hr class="divider">
<?php include "footer.php"?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

