<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Ecommerce Fajar</title>
		
		<!-- fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="styles/bootstrap.min.css" />
		<!-- fontawesome -->
		<link rel="stylesheet" href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"/>
		<!-- style.css -->
		<link rel="stylesheet" type="text/css" href="styles/styles.css" />
	</head>
	<body>

		
		<div id="top"><!-- top starts -->
			<div class="container"><!-- container start -->
				<div class="row">
					<div class="col-md-6 offer">
						<a href="#" class="btn btn-success btn-sm">
							Welcome : Guest
						</a>
						<a href="#">Shopping Cart Total Price: $100, Total Item 2</a>
					</div>
					<div class="col-md-6">
						<ul class="menu">
							<li><a href="customer_register.php">Register</a></li>
							<li><a href="checkout.php">My Account</a></li>
							<li><a href="cart.php">Go To Cart</a></li>
							<li><a href="checkout.php">Login</a></li>
						</ul><!-- menu end -->
					</div>
				</div>
			</div><!-- container end -->
		</div><!-- top end -->

		<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
			<div class="container">
				<a class="navbar-brand home" href="index.php">FajarStore</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navigation">
					<div class="padding-nav">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="shop.php">Shop</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="checkout.php">My Account</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="cart.php">Shopping Cart</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>
						</ul>
					</div><!-- padding-nav ends -->		
				</div><!-- collapse navbar-collapse ends -->
				<div class="clearfix">
					<button class="btn btn-primary mr-1" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="collapseExample">
						<i class="fa fa-search"></i>
					</button>
					<a href="cart.php" class="btn btn-primary navbar-btn right">
						<i class="fa fa-shopping-cart"></i>
						<span>4 Items in carts</span>
					</a>
				</div><!-- clearfix ends -->
			</div><!-- container ends -->
		</nav><!-- navbar ends -->

		<div class="collapse clearfix bg-white" id="search">
			<div class="container">
				<form class="form-inline navbar-form my-1" method="get" action="results.php">
						<input class="form-control mr-sm-1" type="text" placeholder="Search" aria-label="Search" name="user-query" required>
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div><!-- container ends -->
		</div><!-- collapse celarfix -->

		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb" class="navigasi-breadcrumb">
							<ol class="breadcrumb nav-breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Shop</li>
							</ol>
						</nav>
					</div><!-- col-md-12 ends -->
				</div><!-- row ends -->
				<div class="row">
					<div class="col-md-3 mb-3">
						<?php include_once("includes/sidebar.php"); ?>
					</div><!-- col-md-3 ends -->
					<div class="col-md-9">
						<div class="card p-2">
							<h1>Shop</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
						</div><!-- card ends -->

						<div class="row mt-2">
							<div class="col-md-4 col-sm-6 center-responsive">
								<div class="product">
									<a href="details.php">
										<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid">
										<div class="text">
											<h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
											<p class="price">$50</p>
											<p class="buttons">
												<a href="details.php" class="btn btn-secondary btn-sm">View Details</a>
												<a href="details.php" class="btn btn-primary btn-sm">
													<i class="fa fa-shopping-cart"></i>
													Add to Cart
												</a>
											</p>
										</div><!-- text ends -->
									</a>
								</div><!-- product ends -->
							</div><!-- col-md-4 col-sm-6 center-responsive ends -->

							<div class="col-md-4 col-sm-6 center-responsive">
								<div class="product">
									<a href="details.php">
										<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid">
										<div class="text">
											<h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
											<p class="price">$50</p>
											<p class="buttons">
												<a href="details.php" class="btn btn-secondary btn-sm">View Details</a>
												<a href="details.php" class="btn btn-primary btn-sm">
													<i class="fa fa-shopping-cart"></i>
													Add to Cart
												</a>
											</p>
										</div><!-- text ends -->
									</a>
								</div><!-- product ends -->
							</div><!-- col-md-4 col-sm-6 center-responsive ends -->

							<div class="col-md-4 col-sm-6 center-responsive">
								<div class="product">
									<a href="details.php">
										<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid">
										<div class="text">
											<h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
											<p class="price">$50</p>
											<p class="buttons">
												<a href="details.php" class="btn btn-secondary btn-sm">View Details</a>
												<a href="details.php" class="btn btn-primary btn-sm">
													<i class="fa fa-shopping-cart"></i>
													Add to Cart
												</a>
											</p>
										</div><!-- text ends -->
									</a>
								</div><!-- product ends -->
							</div><!-- col-md-4 col-sm-6 center-responsive ends -->

							<div class="col-md-4 col-sm-6 center-responsive">
								<div class="product">
									<a href="details.php">
										<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid">
										<div class="text">
											<h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
											<p class="price">$50</p>
											<p class="buttons">
												<a href="details.php" class="btn btn-secondary btn-sm">View Details</a>
												<a href="details.php" class="btn btn-primary btn-sm">
													<i class="fa fa-shopping-cart"></i>
													Add to Cart
												</a>
											</p>
										</div><!-- text ends -->
									</a>
								</div><!-- product ends -->
							</div><!-- col-md-4 col-sm-6 center-responsive ends -->

							<div class="col-md-4 col-sm-6 center-responsive">
								<div class="product">
									<a href="details.php">
										<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid">
										<div class="text">
											<h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
											<p class="price">$50</p>
											<p class="buttons">
												<a href="details.php" class="btn btn-secondary btn-sm">View Details</a>
												<a href="details.php" class="btn btn-primary btn-sm">
													<i class="fa fa-shopping-cart"></i>
													Add to Cart
												</a>
											</p>
										</div><!-- text ends -->
									</a>
								</div><!-- product ends -->
							</div><!-- col-md-4 col-sm-6 center-responsive ends -->

							<div class="col-md-4 col-sm-6 center-responsive">
								<div class="product">
									<a href="details.php">
										<img src="admin_area/product_images/produk1.jpg" alt="produk 1" class="img-fluid">
										<div class="text">
											<h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
											<p class="price">$50</p>
											<p class="buttons">
												<a href="details.php" class="btn btn-secondary btn-sm">View Details</a>
												<a href="details.php" class="btn btn-primary btn-sm">
													<i class="fa fa-shopping-cart"></i>
													Add to Cart
												</a>
											</p>
										</div><!-- text ends -->
									</a>
								</div><!-- product ends -->
							</div><!-- col-md-4 col-sm-6 center-responsive ends -->
						</div><!-- row ends -->

						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">First</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Last</a>
								</li>
							</ul><!-- pagination justify-content-center ends -->
						</nav><!-- nav pagination ends -->
					</div><!-- col-md-9 ends -->
				</div><!-- row-ends -->
			</div><!-- container ends -->
		</div><!-- content ends -->

		
		<?php include_once "includes/footer.php"; ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
