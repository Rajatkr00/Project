<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
	<?php include'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/image3.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/image2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/image1.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center"> About Us</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="image/ted2.png" class="img-fluid aboutimg">
				
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">Rajat Kumar</h2>
				<p class="py-5"> akjbkabdkajkadad adjabk aakdbakdkadkadk adabdkakdakjdkad  dakdkabkdjvjfabdkbbekdk dakdbadkabdakda</p>
				<a href="about.php" class="btn btn-success"> Check more</a>
			</div>	
			
			<div class="container-fluid py-5">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/ted1.png" class="img-fluid aboutimg">
        
      </div>

      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">Akshita Goel</h2>
        <p class="py-5"> akjbkabdkajkadad adjabk aakdbakdkadkadk adabdkakdakjdkad  dakdkabkdjvjfabdkbbekdk dakdbadkabdakda</p>
        <a href="about.php" class="btn btn-success"> Check more</a>
        
      </div>
		</div>
	</div>
</section>
<section class="my-6">
	<div class="py-5">
		<h3 class="text-center py-5"> Top Brands</h3>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/image4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Flipkart</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.flipkart.com/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>
				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/image9.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pizza Hut</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.pizzahut.co.in/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>

				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/ted3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Google</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.google.com/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>

				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/ted4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dominos</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://pizzaonline.dominos.co.in/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>

				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/ted6.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Adobe</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.adobe.com/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>

				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/ted.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Burger King</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.bk.com/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>

				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/image8.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mc donalds</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.mcdonalds.com/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>

				<div class="col-lg-3 col-md-3 col-12">
					<div class="card" style="width: 18rem;">
  <img src="image/image6.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Spotify</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.spotify.com/" class="btn btn-primary">Shop Now</a>
  </div>
</div>
					
				</div>
			</div>


		</div>
	
</section>	


<section class="my-5">
	<div class="py-5">
		<h3 class="text-center"> Our Services</h3>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-12">
			<img src="image/net1.jpg" class="img-fluid pb-3">
			
		</div>

		<div class="col-lg-3 col-md-3 col-12">
			<img src="image/net2.jpg" class="img-fluid pb-3">
			
		</div>

		<div class="col-lg-3 col-md-3 col-12">
			<img src="image/net3.jpg" class="img-fluid pb-3">
			
		</div>

		<div class="col-lg-3 col-md-3 col-12">
			<img src="image/net4.jpg" class="img-fluid pb-3">
			
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/net5.jpg" class="img-fluid pb-3">
			
		</div>
		<div class="col-lg-3 col-md-3 col-12">
			<img src="image/net6.png" class="img-fluid pb-3">
			
		</div>
		
		
	</div>
	
</div>

</section>		


<section class="my-5">
	<div class="py-5">
		<h3 class="text-center"> Contact Us</h3>
</div>


<div class="w-50 m-auto">
	<form action="userinfo.php" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" autocomplete="off" class="form-control">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" autocomplete="off" class="form-control">
		</div>

		<div class="form-group">
			<label>Contact No</label>
			<input type="text" name="contact" autocomplete="off" class="form-control">
		</div>

		<div class="form-group">
			<label>comment</label>
			<textarea class="form-control" name="comment">	
			</textarea>
		</div>

		<button type="submit" class="btn btn-success">Submit</button>
	</form>
</div>
</section>

<?php include'footer.php'; ?>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




