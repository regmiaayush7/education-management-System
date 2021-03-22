<?php include 'loginvalidation.php'?>
<?php
 $db = new mysqli('localhost', 'root', '', 'register');
  if(isset($_POST['submit'])):
  extract($_POST);
  if($old_password!="" && $password!="" && $confirm_pwd!="") :
  $old_pwd=md5(mysqli_real_escape_string($db,$_POST['old_password']));
  $pwd=md5(mysqli_real_escape_string($db,$_POST['password']));
  $c_pwd=md5(mysqli_real_escape_string($db,$_POST['confirm_pwd']));
  if($pwd == $c_pwd) :
  if($pwd!=$old_pwd) :
    $sql="SELECT * FROM `admin` WHERE `id`='1'";
    $db_check=$db->query($sql);
    $count=mysqli_num_rows($db_check);
  if($count==1) :
    $fetch=$db->query("UPDATE `admin` SET `password` = '$pwd' WHERE `id`='1'");
    $old_password=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password update successfully.";
  else:
    $error = "The password you gave is incorrect.";
  endif;
  else :
    $error = "Old password new password same Please try again.";
  endif;
  else:
    $error = "New password and confirm password do not matched";
  endif;
  else :
    $error = "Please fil all the fields";
  endif;   
  endif;
?> 


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>change password!</title>
  </head>
  <body>
        <?php include 'adminnav.php'?> 
        <hr class="divider">
         <div class="container">
            <h3 style="text-align: center;"> Change Password</h3>
      <form class="form-group" method="post" autocomplete="off" id="password_form">
<p align="center">old password<br />
 <input class="form-control" type="password" name="old_password" /></p>
<p align="center">New password<br />
 <input class="form-control" type="password" name="password"  id="password" class="ser" />
</p>
<p align="center">Confirm password<br />
 <input class="form-control" type="password" name="confirm_pwd" id="confirm_pwd" class="ser" />
</p>
<p align="center">
 <input name="submit" type="submit" value="Save Password" class="submit" />

</p>
<div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
 <?php echo @$error; ?><?php echo @$msg_sucess; ?>
</div>
</form>

         </div>
                 <?php include 'navigation.php'?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>