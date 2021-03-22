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
    <title>Admin Teacher Update</title>
  </head>
  <body>
<?php include 'adminnav.php'?>
<div class="container-fluid mt-3">
    <p><h2> Welcome to the Staff Update</h2></p>
</div>
<div id="content">
    <form method="post" action="updateteacher.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
     
      <div class="col-md-offset-3 col-md-6">
                    <h4>Add Staff</h4>
      <div class="form-group">
               <label>Name</label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="caption" class="form-control" required/></textarea>
                        </div>
              <input type="submit" name="submit" value="Done" class="btn btn-success" />
            </div>
             <?php 
      
      if (isset($_POST["submit"]))
      {
        $con = mysqli_connect("localhost", "root", "", "register");
        $title = mysqli_real_escape_string($con, $_POST["title"]);
        $caption = mysqli_real_escape_string($con, $_POST["caption"]);

        $title = htmlentities($title);
        $caption = htmlentities($caption);
        {
          $sql = "INSERT INTO staff(title,details) VALUES('$title','$caption')";
          mysqli_query($con, $sql);
        }
      
        echo"<p> Information has been uploaded<p/>";
      }
      ?>
    </form>
  </div>
  <?php include 'stafflist.php' ?>
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