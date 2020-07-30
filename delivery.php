<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodie</title>

        <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

    <!-- Custom styles for this index page -->
    <link href="vendor/custom/css/index.css" rel="stylesheet">

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />

<!-- Custom styles for this profile page -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	
	
	<link href="vendor/custom/css/delivery.css" rel="stylesheet">
    <script src="vendor/custom/js/delivery.js"></script>
    
  </head>

  <body>

    
      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Foodator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav">
        <li>
          <a href="index.html">Home </a>

        </li>
        <li><a href="faq.html">FAQ</a>

        </li>
        <li><a href="about_us.html">About Us</a>

        </li>


<li><a href="contact_us.html">Contact Us</a>

        </li>

        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a href="profile.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account </a>

          <ul class="dropdown-menu">
            <li><a href="restaurant.html">Add Restaurant</a>

            </li>
            <li><a href="review.html">Add Review</a>

            </li>
            <li><a href="delivery.html">View Deliverables</a>

            </li>
            <li role="separator" class="divider"></li>

        </li>
        <li><a href="index.html">Sign Out</a>

        </li>

        </li>
      </ul>
    </div>
  </div>
</nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('c_image_01.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('c_image_02.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('c_image_03.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
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
    </header>


    


    
    <div class="col-md-3"></div>


    <div class="col-md-3">
    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>View Deliverables</h1>
        </div></section>





      




      <!--Comment box ends here-->
      
    <br>

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->














</html>














<!-- View Deliverables-->
<?php
$servername="localhost";
$username="root";
$password="";
$db="foodie";
$conn=new mysqli($servername,$username,$password,$db);
$sql = "SELECT * FROM delivery" ;
$sql2="SELECT count(1) FROM delivery";
$result = mysqli_query($conn,$sql);
$cnt = mysqli_query($conn,$sql2);
$row=mysqli_fetch_array($cnt);
$n=$row[0];
$data=array();
while($row = mysqli_fetch_array($result))
{
  $data[]=$row;
}
$x=0;
for ($x = 0; $x < $n; $x++){
?>
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $data[$x]['fname'];?></strong></h4><h4><small>Item: <?php echo $data[$x]['item'];?></small><br><small>Shipping Address: <?php echo $data[$x]['address'];?><br>
								<br>Phone no. <?php echo $data[$x]['phone'];?></small><br></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>Quantity  <?php echo $data[$x]['quantity'];?> <span class="text-muted"></span></strong></h6>
							</div>
							
							<div class="col-xs-2">
								<button type="button" class="btn btn-xs btn-danger">
									Deliver
								</button>
							</div>
						</div>
					</div>
					<hr>
<?php }?>
					
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong><?php echo $n;?> Deliveries</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								Total Deliver
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>