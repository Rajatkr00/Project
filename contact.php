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

<body>
  <div class="jumbotron text-center">
  <h1>Rakshit.Pvt.Ltd</h1>
  <p>Welcome to Ecommers</p>
</div>



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
</body>
</html>