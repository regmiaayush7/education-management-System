   <!-- Image and text -->
   <nav class="navbar navbar-light bg-light">
        <div class="row container-fluid ml-4"> 
            <a class="navbar-brand ml-2" href="index.php">
               <img src=" " width="30" height="30" class="d-inline-block align-top" alt="">S V M
            </a>     
            <div class="location col-lg-3 ml-5"><img src="./images/img2.png" width="30" height="30" class="d-inline-block align-top" alt=""> Bidur-3,Nuwakot</div>
            <div class="phone  col-lg-3"><img src="./images/img1.png" width="30" height="30" class="d-inline-block align-top" alt=""> 9818926961</div>
            <div class="login  col-lg-3"><a data-toggle= "modal" data-target="#staticBackdrop">
              <img src="./images/img3.png" width="30" height="30" class="d-inline-block align-top" alt="">Login</a><!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
function displayLogin(){
  echo <<< HTML
<div class="container mt-5 col-lg-4">
  <form class="needs-validation" name="login" method ="Post" action ="$_SERVER[PHP_SELF]" novalidate>
  <div class="form-group justify-content-center">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group content-justify-center">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Passsword" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

    <input type='hidden' name='check1' value='1'/>
            <center><button type="Submit" name="login" class="btn btn-primary btn-lg">Login</button></center>
    </form>
    </div>
HTML;
}

function validateLogin($username,$password){
  $user = array();
  $con = mysqli_connect("localhost","root","","register");
  
  if(!$con){
    die("Cannot connect to server ".mysqli_connect_error());
  }

  $query = mysqli_query($con,"SELECT username,password FROM admin WHERE username='$username' AND password='".md5($password)."'");

  if(!$query){
    die("cannot perform query".mysqli_error($con));
  }
  while($row = mysqli_fetch_assoc($query)){
    $user = $row;
  }
  return $user; 
} 
            if(isset($_POST['check1'])){
        if($user = validateLogin($_POST['username'],$_POST['password'])){
          $_SESSION['user'] = $user;
          echo '<meta http-equiv="refresh" content="0;url=adashboard.php"/>';
      }
        else{
          echo"<center><b>Invalid Username or password</b></center>";
          displayLogin();
        }
      }
      else{
        displayLogin();
      }
    ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
         </div> 
         </div>
    </nav>
    <div class="container">
     <h3><div class="well text-center"><?php date_default_timezone_set("Asia/Kathmandu"); echo date("Y M d D ,  h:i:a"); ?>
     </h3></div>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#920f0f;">
      <div class="container ml-3">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-3">
          <li class="nav-item" color="#fff">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item ml-3">
               <a class="nav-link" href="index.php #gallery">Gallery</a>
            </li>
            <li class="nav-item ml-3">
               <a class="nav-link" href="index.php #Uevent">Events</a>
            </li>
              <li class="nav-item ml-3">
                  <a class="nav-link" href="staff.php">Our Teachers</a>
               </li>
                <!-- <li class="nav-item dropdown ml-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Result
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nursary.php">Nursary</a>
          <a class="dropdown-item" href="lkg.php">LKG</a>
          <a class="dropdown-item" href="ukg.php">UKG</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="one.php">Class 1</a>
          <a class="dropdown-item" href="two.php">Class 2</a>
          <a class="dropdown-item" href="three.php">Class 3</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="four.php">Class 4</a>
          <a class="dropdown-item" href="five.php">Class 5</a>
          <a class="dropdown-item" href="six.php">Class 6</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="seven.php">Class 7</a>
          <a class="dropdown-item" href="eight.php">Class 8</a>
          <a class="dropdown-item" href="#">Class 9</a>
        </div>
      </li>  -->
      <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Results<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="nursary.php">Nursary</a></li>
              <li><a class="dropdown-item" href="lkg.php">LKG</a></li>
              <li><a class="dropdown-item"href="ukg.php">UKG</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header"></li>
              <li><a class="dropdown-item" href="one.php">Class 1</a></li>
              <li><a class="dropdown-item" href="two.php">Class 2</a></li>
              <li><a class="dropdown-item" href="three.php">Class 3</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header"></li>
              <li><a class="dropdown-item" href="four.php">Class 4</a></li>
              <li><a class="dropdown-item" href="five.php">Class 5</a></li>
              <li><a class="dropdown-item" href="six.php">Class 6</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header"></li>
              <li><a class="dropdown-item" href="seven.php">Class 7</a></li>
              <li><a class="dropdown-item" href="eigth.php">Class 8</a></li>
              <li><a class="dropdown-item" href="nine.php">Class 9</a></li>
            </ul>
          </li>
               <li class="nav-item ml-3">
                  <a class="nav-link" href="fee.php">Fee Structure</a>
               </li>
                  </ul>
           </div>
      </div>
</nav>
