<?php 
	session_start();
?>
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
	<link href='dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<link href='demo.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>School</title>
  </head>
  <body>
  <?php include "header.php";?>
<div id="carouselExampleIndicators" class="carousel slide mt-2" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner m" role="listbox" style=" width:100%; max-height: 500px !important;">
    <div class="carousel-item active">
      <img src="./images/img10.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/img7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/img8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/img9.jpg" class="d-block w-100" alt="...">
    </div> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <hr class="featurette-divider">
<div class="container-fluid ">
 <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading" style="text-align: center;">About us</h2>
        <p class="lead">Located in the outskirts of a historical town Devighat, 6 km. ahead of
the headquarters (Bidur) of Nuwakot, <b>Samudayik Vidhya Mandir</b> is a
secondary level coeducational English medium boarding school with
a glorious academic excellence and history.<br/>
SVM also has changed its organizational structure since the
academic year 2076. Registered under &quot;Public Academic
Trusteeship&quot;, it is managed by a dedicated team of trustees in the
leadership of a veteran local entrepreneur Mr. Madhav Lamichhane,
Chairman of the trusteeship. SVM also has a new team of
administration under the leadership of a principal having a two-
decade long teaching and administrative experience with sound
academic and pedagogical background.
Taught  by qualified, trained, efficient and experienced
teachers, SVM currently run it its own school building and
compound extended in a four ropani landscape surrounded by lust
and luxuriant field and magnificent hills.
SVM classrooms are spacious, ventilated, well-furnished and
equipped with fans, weather-informing digital clocks under the
surveillance of cc cameras.
SVM has performances equipped with a modern computer lab, science lab
and a small library facility.<br/>
In nut-shell, it can be summarized that SVM has been putting its
every best efforts to impart sound education in its entire catchment
areas since its established in 2052 BS. This is also justifiable to
remark that SVM has experienced ups and downs, hurdles and
advancement regarding its sustainability and existence.SVM has embarked now
towards the path of recognizing itself as one of the best schools in
the entire district of Nuwakot.</p>
      </div>
      <div class="col-md-5 order-md-1 mt-5">
         <img src="./images/img4.jpg" class="d-block w-100" alt=".....">
      </div>
    </div>
  </div>
<hr class="featurette-divider">

<div class="container-fluid">
   <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading" style="text-align: center;">Principal Words</h2>
        <p class="lead">Greetings from Mr Santosh 'Avikal' Rai, Principal of Samudayik Bidhya Mandir, Bidur-3,Nuwakot, Nepal. We are truly excited to have you visiting our website. Our school works with strategic partners to develop and guide our students to create future prospect for the country and society. Registered under &quot;Public Academic Trusteeship&quot;, it is managed by a dedicated team of trustees in the leadership of a veteran local entrepreneur Mr. Madhav Lamichhane, Chairman of the trusteeship. Along with emphasis of imparting qualitative education by means of child-centered and psychological methodologies of learning facilitation.<br/>SVM equally gives priority to the holistic development of learners by organizing regular co-curriculum activities such as quizzes, spellingcontests, poetry recitation, essay writing, debates, oratory competitions, drawing, games and sports, music and dance.More specifically, we do not focus only on the cognitive development of the learners rather our emphasis will equally be on the affective and psychomotor domains of the learners. Learner&#39;s interest, attribute, ability, emotional aspects, disciplinary activities,regularity age and gender related issues are highly taken into consideration for their healthy growth and overall development.Thus, continuous assessment system (CAS) has been partially put into practice. It can be summarized that SVM has been putting its every best efforts to impart sound education in its entire catchment areas since its established in 2052 BS.
</p>
      </div>
      <div class="col-md-5 mt-5">
        <img src="./images/img5.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <hr class="featurette-divider">

<div class="container-fluid" id="Uevent">
<h2 style="text-align: center;"> Up Coming Events </h2>
<div class="accordion" id="accordionExample">
<div class="card">
<?php
    $con = mysqli_connect("localhost", "root", "", "register");
    $sql = "SELECT * FROM event";
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
<hr class="featurette-divider"> 

<div class="container">
    <h1 class="align-center" id="gallery">Gallery</h1>
    <div class="gallery">
         <?php
                    $con = mysqli_connect("localhost", "root", "", "register");
                    $sql = "SELECT * FROM gallery";
                    $result = mysqli_query($con, $sql);
                    $row_count = mysqli_num_rows($result);
                    $i=1;
                    while ($row = mysqli_fetch_object($result)) {
                    ?>
                    <a href="photos/<?php echo $row->path; ?>"><img src="photos/<?php echo $row->path; ?>" alt="" title=""/></a>
                    <?php if($i%5 == 0 || $i == $row_count) { ?>
                    <div class="clear"></div>
                    <?php } ?>
          <?php $i++; } ?>
      </div>
    </div>

<hr class="featurette-divider">
  <?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="dist/simple-lightbox.js"></script>
<script>
	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
</script>
   <script>
      $(document).ready(function() {
  $('#navbarDropdown').mouseenter(function() {
    $('.dropdown-menu').slideToggle(300, "linear");
  });
  
  $('.dropdown-menu').mouseleave(function() {
    $(this).slideToggle(300, "linear");
  });
});
</script>     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>