<?php
include '../conn/connect.php';
$detailItem = mysqli_query($connect, "SELECT * FROM barang WHERE id_barang = '" . $_GET['id'] . "'");
$r = mysqli_fetch_assoc($detailItem);

$size = $r['size'];
$s = explode(';', $size);
$detail = $r['detail'];
$d = explode(';', $detail);


$starFill = '
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
	</svg>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $r['nama_barang']; ?> smith Indonesia</title>

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

	<!-- Custom Top Icon -->
	<link rel="icon" type="image/png" href="../assets/images/icons/icon.ico">

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
							</i> +022-95-51-84</a></li>
					<li><a href="https://mail.google.com/" target="_blank">
							<i class="fa">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
									<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
								</svg>
							</i> zombiexshine@gmail.com</a></li>
					<li><a href="https://maps.google.com/" target="_blank">
							<i class="fa">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
									<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
								</svg>
							</i> Bandung, West Java</a></li>
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
								<img src="../assets/images/icons/Group 2 (3).png" alt="YBR Motogarage" width="250px">
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
									<span>Your Wishlist</span>
									<div class="qty">2</div>
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
									<span>Your Cart</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
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
						<li><a href="categories.php">Brands</a></li>
						<li><a href="categories.php?merk=<?= $r['merk']; ?>"><?= $r['merk'];  ?></a></li>
						<li class="active"><?= $r['nama_barang'];  ?></li>
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
				<!-- Product main img -->
				<div class="col-md-5 col-md-push-2">
					<div id="product-main-img">
						<div class="product-preview">
							<img src="../assets/images/profile/<?= $r['foto']; ?>" alt="">
						</div>
					</div>
				</div>
				<!-- /Product main img -->

				<!-- Product thumb imgs -->
				<div class="col-md-2  col-md-pull-5">
				</div>
				<!-- /Product thumb imgs -->

				<!-- Product details -->
				<div class="col-md-5">
					<div class="product-details">
						<h2 class="product-name"><?= $r['nama_barang'];  ?></h2>
						<div>
							<h3 class="product-price">Rp. <?= $r['harga'];  ?></h3>
							<?php
							if ($r['stok'] == 0) { ?>
								<span class="product-available">Out of Stock</span>
							<?php } else { ?>

								<span class="product-available">In Stock</span>
							<?php } ?>
						</div>

						<div class="product-options">
							<label>
								Size
								<select class="input-select">

									<?php
									if ($r['stok'] == 0) { ?>
										<option value="-">-</option>
										<?php } else {
										$noUrut = 0;
										while ($noUrut < count($s)) {
										?>
											<option value="0"><?= $s[$noUrut]; ?></option>
									<?php
											$noUrut++;
										}
									}
									?>


								</select>
							</label>
						</div>

						<div class="add-to-cart">
							<div class="qty-label">
								Qty
								<div class="input-number">
									<input type="number" value="1">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
							<button class="add-to-cart-btn">
								<i class="fa">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
										<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
									</svg>
								</i> add to cart</button>
						</div>

						<ul class="product-btns">
							<li><a href="#">
									<i class="fa">
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
											<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
										</svg>
									</i> add to wishlist</a></li>
							<li><a href="#">
									<i class="fa">
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
										</svg>
									</i> add to compare</a></li>
						</ul>

						<ul class="product-links">
							<li>Category:</li>
							<li><a href="categories.php?merk=<?= $r['merk'] ?>"><?= $r['merk']; ?></a></li>
						</ul>

					</div>
				</div>
				<!-- /Product details -->

				<!-- Product tab -->
				<div class="col-md-12">
					<div id="product-tab">
						<!-- product tab nav -->
						<ul class="tab-nav">
							<li><a data-toggle="tab" href="#tab1">Description</a></li>
							<li><a data-toggle="tab" href="#tab2">Sizing & Fit</a></li>
							<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
						</ul>
						<!-- /product tab nav -->

						<!-- product tab content -->
						<div class="tab-content">
							<!-- tab1  -->
							<div id="tab1" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-12">
										<?php
										$noUrut = 0;
										while ($noUrut < count($d)) {
										?>
											<p><?= $d[$noUrut]; ?></p>
										<?php
											$noUrut++;
										}
										?>
									</div>
								</div>
							</div>
							<!-- /tab1  -->

							<!-- tab2  -->
							<div id="tab2" class="tab-pane fade in">
								<div class="row">
									<div class="col-md-12">
										<table class="table">
											<?php

											$sizeMerk = $r['merk'];

											$sizeList = mysqli_query($connect, "SELECT * FROM size WHERE merk = '$sizeMerk'");

											while ($si = mysqli_fetch_assoc($sizeList)) {
												if ($sizeMerk == 'Arai' || $sizeMerk == 'AGV') {


											?>
													<tr>
														<td>Size</td>
														<td>Head (cm)</td>
													</tr>
													<tr>
														<td>2XS</td>
														<td><?= $si['2xs'] ?></td>
													</tr>
													<tr>
														<td>XS</td>
														<td><?= $si['xs'] ?></td>
													</tr>
													<tr>
														<td>SM</td>
														<td><?= $si['sm'] ?></td>
													</tr>
													<tr>
														<td>MD</td>
														<td><?= $si['md'] ?></td>
													</tr>
													<tr>
														<td>LG</td>
														<td><?= $si['lg'] ?></td>
													</tr>
													<tr>
														<td>XL</td>
														<td><?= $si['xl'] ?></td>
													</tr>
													<tr>
														<td>2XL</td>
														<td><?= $si['2xl'] ?></td>
													</tr>
													<tr>
														<td>3XL</td>
														<td><?= $si['3xl'] ?></td>
													</tr>
												<?php } else { ?>
													<tr>
														<td>Size</td>
														<td>Head (cm)</td>
													</tr>
													<tr>
														<td>2XS</td>
														<td><?= $si['2xs'] ?></td>
													</tr>
													<tr>
														<td>XS</td>
														<td><?= $si['xs'] ?></td>
													</tr>
													<tr>
														<td>S</td>
														<td><?= $si['sm'] ?></td>
													</tr>
													<tr>
														<td>M</td>
														<td><?= $si['md'] ?></td>
													</tr>
													<tr>
														<td>L</td>
														<td><?= $si['lg'] ?></td>
													</tr>
													<tr>
														<td>XL</td>
														<td><?= $si['xl'] ?></td>
													</tr>
													<tr>
														<td>2XL</td>
														<td><?= $si['2xl'] ?></td>
													</tr>
													<tr>
														<td>3XL</td>
														<td><?= $si['3xl'] ?></td>
													</tr>

											<?php }
											}

											?>
										</table>
									</div>
								</div>
							</div>
							<!-- /tab2  -->

							<!-- tab3  -->
							<div id="tab3" class="tab-pane fade in">
								<div class="row">
									<!-- Rating -->
									<div class="col-md-3">
										<div id="rating">
											<div class="rating-avg">
												<span>4.5</span>
												<div class="rating-stars">
													<i class="star"><?= $starFill; ?></i>
													<i class="star"><?= $starFill; ?></i>
													<i class="star"><?= $starFill; ?></i>
													<i class="star"><?= $starFill; ?></i>
													<i class="star-o"><?= $starFill; ?></i>
												</div>
											</div>
											<ul class="rating">
												<li>
													<div class="rating-stars">
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
													</div>
													<div class="rating-progress">
														<div style="width: 80%;"></div>
													</div>
													<span class="sum">3</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
													</div>
													<div class="rating-progress">
														<div style="width: 60%;"></div>
													</div>
													<span class="sum">2</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
													</div>
													<div class="rating-progress">
														<div></div>
													</div>
													<span class="sum">0</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="star"><?= $starFill; ?></i>
														<i class="star"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
													</div>
													<div class="rating-progress">
														<div></div>
													</div>
													<span class="sum">0</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="star"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
														<i class="star-o"><?= $starFill; ?></i>
													</div>
													<div class="rating-progress">
														<div></div>
													</div>
													<span class="sum">0</span>
												</li>
											</ul>
										</div>
									</div>
									<!-- /Rating -->

									<!-- Reviews -->
									<div class="col-md-6">
										<div id="reviews">
											<ul class="reviews">
												<li>
													<div class="review-heading">
														<h5 class="name">John</h5>
														<p class="date">27 DEC 2018, 8:0 PM</p>
														<div class="review-rating">
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star-o"><?= $starFill; ?></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
													</div>
												</li>
												<li>
													<div class="review-heading">
														<h5 class="name">John</h5>
														<p class="date">27 DEC 2018, 8:0 PM</p>
														<div class="review-rating">
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star-o"><?= $starFill; ?></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
													</div>
												</li>
												<li>
													<div class="review-heading">
														<h5 class="name">John</h5>
														<p class="date">27 DEC 2018, 8:0 PM</p>
														<div class="review-rating">
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star"><?= $starFill; ?></i>
															<i class="star-o"><?= $starFill; ?></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
													</div>
												</li>
											</ul>
											<ul class="reviews-pagination">
												<li class="active">1</li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- /Reviews -->

									<!-- Review Form -->
									<div class="col-md-3">
										<div id="review-form">
											<form class="review-form">
												<input class="input" type="text" placeholder="Your Name">
												<input class="input" type="email" placeholder="Your Email">
												<textarea class="input" placeholder="Your Review"></textarea>
												<div class="input-rating">
													<span>Your Rating: </span>
													<div class="stars">
														<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
														<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
														<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
														<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
														<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
													</div>
												</div>
												<button class="primary-btn">Submit</button>
											</form>
										</div>
									</div>
									<!-- /Review Form -->
								</div>
							</div>
							<!-- /tab3  -->
						</div>
						<!-- /product tab content  -->
					</div>
				</div>
				<!-- /product tab -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- Section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-12">
					<div class="section-title text-center">
						<h3 class="title">Related Products</h3>
					</div>
				</div>

				<?php

				$byMerk = mysqli_query($connect, "SELECT * FROM barang WHERE merk = '" . $r['merk'] . "'");

				while ($r = mysqli_fetch_assoc($byMerk)) { ?>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../assets/images/profile/<?= $r['foto']; ?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category"><?= $r['merk']; ?></p>
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
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div>
					<!-- /product -->

				<?php } ?>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Section -->

	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Sign Up for the <strong>NEWSLETTER</strong></p>
						<form>
							<input class="input" type="email" placeholder="Enter Your Email">
							<button class="newsletter-btn">
								<i class="fa">
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
										<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
									</svg>
								</i> Subscribe</button>
						</form>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NEWSLETTER -->

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
									<img src="../assets/images/icons/Group.png" alt="Smith Indonesia" width="250px">
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
										</i> +022-95-51-84</a></li>
								<li><a href="https://mail.google.com/" target="_blank">
										<i class="fa">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
												<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
											</svg>
										</i> zombiexshine@gmail.com</a></li>
								<li><a href="https://maps.google.com/" target="_blank">
										<i class="fa">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
												<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
											</svg>
										</i> Bandung, West Java</a></li>
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
							</script> YBR Motogarage</a>
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