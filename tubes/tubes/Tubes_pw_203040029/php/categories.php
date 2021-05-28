<?php
include '../conn/connect.php';
error_reporting(0);

if ($_GET['nama_barang']) {
	$countMerk = mysqli_query($connect, "SELECT nama_barang FROM barang WHERE nama_barang = '" . $_GET['nama_barang'] . "'");
	$selectMW = mysqli_query($connect, "SELECT * FROM barang WHERE nama_barang = '" . $_GET['nama_barang'] . "'");
	$selectall = mysqli_query($connect, "SELECT * FROM barang WHERE nama_barang = '" . $_GET['nama_barang'] . "'");
	$f = mysqli_fetch_assoc($selectall);
} else {
	$countMerk = mysqli_query($connect, "SELECT nama_barang FROM barang");
}

$banyakitem = 0;

while ($g = mysqli_fetch_assoc($countMerk)) {
	$banyakitem++;
}
$countall = mysqli_query($connect, "SELECT nama_barang FROM barang");
$allItem = 0;

while ($g = mysqli_fetch_assoc($countall)) {
	$allItem++;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php
	if ($_GET['nama_barang']) {
	?>
		<title><?= $f['nama_barang']; ?> smithindonesia</title>
	<?php } else {
	?>
		<title>Product - Smith Indonesia</title>
	<?php }


	?>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#">
							<i class="fa">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
								</svg>
							</i> +62 817-7992-0419</a></li>
					<li><a href="https://mail.google.com/" target="_blank">
							<i class="fa">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
									<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
								</svg>
							</i> smithindonesia@gmail.com</a></li>
					<li><a href="https://maps.google.com/" target="_blank">
							<i class="fa">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
									<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
								</svg>
							</i> Jl. Kemuning,Bandung, West Java</a></li>
				</ul>
				<ul class="header-links pull-right">

					<li><a href="index.php">
							<i class="fa">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
									<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
								</svg>
							</i> Home</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="../assets/images/icons/Group 2 (3).png" alt="Smith Indonesia" width="250px">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form>
								<input class="input" placeholder="Search here">
								<button class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="fa">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
											<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
										</svg>
									</i>
									<span>Wishlist</span>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa">
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
											<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
										</svg>
									</i>
									<span>Cart</span>
									<div class="qty">1</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Srikandi</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>Rp.200.000</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
												<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
											</svg>
										</i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb-tree">
						<li><a href="index.php">Home</a></li>
						<?php

						if ($_GET['nama_barang']) { ?>
							<li><a href="#"><?= $_GET['nama_barang'];  ?></a></li>
						<?php } else { ?>
							<li><a href="categories.php">Product</a></li>

						<?php }

						?>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
					<!-- aside Widget -->
					<div class="aside">
						<h3 class="aside-title">Brands</h3>
						<div class="checkbox-filter">

							<div tabindex="0" class="input-checkbox ">
								<label for="category-0">
									<a href="categories.php"><button class="transparent" id="category-1">All</button></a>
									<small>
										(<?= $allItem; ?>)
									</small>
								</label>
							</div>

							<div tabindex="1" class="input-checkbox ">
								<label for="category-1">
									<a href="categories.php?nama_barang=coffe"><button class="transparent" id="category-1">Coffee</button></a>
									<small>
										<?php

										$countcoffe = mysqli_query($connect, "SELECT nama_barang FROM barang WHERE nama_barang = 'coffe'");
										$banyak = 0;

										while ($r = mysqli_fetch_assoc($countcoffe)) {
											$banyak++;
										}
										?>
										(<?= $banyak; ?>)
									</small>
								</label>
							</div>

							<div tabindex="8" class="input-checkbox">
								<label for="category-8">
									<a href="categories.php?nama_barang=beans"><button class="transparent" id="category-8">Beans</button></a>
									<small>
										<?php

										$countbeans = mysqli_query($connect, "SELECT nama_barang FROM barang WHERE nama_barang = 'beans'");
										$banyak = 0;

										while ($r = mysqli_fetch_assoc($countbeans)) {
											$banyak++;
										}
										?>
										(<?= $banyak; ?>)
									</small>
								</label>
							</div>
						</div>
					</div>
					<!-- /aside Widget -->
				</div>
				<!-- /ASIDE -->

				<!-- STORE -->
				<div id="store" class="col-md-9">
					<!-- store header filter -->
					<div class="store-filter clearfix">
						<span class="store-qty">Showing <?= $banyakitem;  ?> products</span>
					</div>
					<!-- /store header filter -->

					<!-- store products -->
					<div class="row">
						<?php

						while ($r = mysqli_fetch_assoc($selectMW)) { ?>

							<!-- product -->
							<div class="col-md-3 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="../assets/images/profile/<?= $r['foto']; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?= $r['nama_barang']; ?></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $r['id_barang']; ?>"><?= $r['nama_barang'];  ?></a></h3>
										<?php
										if ($r['stok'] == 0) {
										?>
											<h4 class="product-price">OUT OF STOCK</h4>

										<?php } else {
										?>
											<h4 class="product-price">Rp. <?= $r['harga'];  ?></h4>

										<?php }
										?>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn">
											<i class="fa">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
													<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
												</svg>
											</i> add to cart</button>
									</div>
								</div>
							</div>
							<!-- /product -->

						<?php } ?>
					</div>
					<!-- /store products -->
				</div>
				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<!-- LOGO -->
							<div class="footer-logo">
								<a href="index.php" class="logo">
									<img src="../assets/images/icons/Group.png" alt="Smith.Indonesia" width="250px">
								</a>
							</div>
							<!-- /LOGO -->
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>You can contact us either by our online form on this page, or via phone.</p>
							<br>
							<ul class="footer-links">
								<li><a href="#">
										<i class="fa">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
											</svg>
										</i> +62 817-7992-0419</a></li>
								<li><a href="https://mail.google.com/" target="_blank">
										<i class="fa">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
												<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
											</svg>
										</i> smithindonesiagmail.com</a></li>
								<li><a href="https://maps.google.com/" target="_blank">
										<i class="fa">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
												<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
											</svg>
										</i>Jl.Kemuning, Bandung, West Java</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Social Media</h3>
							<ul class="footer-links">
								<li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
								<li><a href="https://www.twitter.com/" target="_blank">Twitter</a></li>
								<li><a href="https://www.instagram.com/smith.indonesia/" target="_blank">Instagram</a></li>
								<li><a href="https://www.whatsapp.com/" target="_blank">Whatsapp</a></li>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Service</h3>
							<ul class="footer-links">
								<li><a href="#">My Account</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<span class="copyright">
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> Smith.Indonesia</a>
						</span>


					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
	<script src="../js/main.js"></script>

</body>

</html>