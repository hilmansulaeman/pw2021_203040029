<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Product List</title>

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

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />

  <link rel="stylesheet" type="text/css" href="../css/dashboard/main.css">

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

  <?php
  include '../conn/connect.php';
  $detailMerk = mysqli_query($connect, "SELECT nama_barang FROM barang");
  $r = mysqli_fetch_assoc($detailMerk);
  $detailUser = mysqli_query($connect, "SELECT nama FROM user WHERE username = '" . $_SESSION['data']['nama'] . "'");
  $u = mysqli_fetch_assoc($detailUser);
  ?>
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
              </i> JL. Kemuning, Bandung, West Java</a></li>
        </ul>
        <?php
        if ($_SESSION['level'] == 'admin') { ?>
          <ul class="header-links pull-right">
            <li><a href="logout.php">
                <i class="fa">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                  </svg>
                </i> Logout</a></li>
            <li><a href="admin.php">
                <i class="fa">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                  </svg>
                </i> Daftar Product</a></li>
            <li><a href="listadmin.php">
                <i class="fa">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                  </svg>
                </i> List Akun</a></li>
            <li><a href="index.php">
                <i class="fa">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                  </svg>
                </i> Home</a></li>
          </ul>
        <?php } else if ($_SESSION['level'] == 'user') { ?>
          <ul class="header-links pull-right">
            <li><a href="logout.php">
                <i class="fa">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                  </svg>
                </i> Logout</a></li>
            <li><a href="#">
                <i class="fa">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                  </svg>
                </i> USD</a></li>
            <li><a href="#">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                  </svg>
                </i> Halo, <b><?= $u['nama'];  ?></b></a></li>
          </ul>
        <?php }
        ?>
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
                <img src="../assets/images/icons/Group 2 (3).png" alt="Smith.Indonesia" style="width: 250px;">
              </a>
            </div>
          </div>
          <!-- /LOGO -->

          <!-- SEARCH BAR -->
          <div class="col-md-6">
            <div class="header-search">
              <form action="categories.php">
                <input name="searchValue" class="input" placeholder="Search here">
                <button name="searchbtn" class="search-btn">Search</button>
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
                        <h4 class="product-price"><span class="qty">1x</span>Rp.140.000</h4>
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
        <!-- NAV -->
        <ul class="main-nav nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="categories.php">Product</a></li>
        </ul>
        <!-- /NAV -->
      </div>
      <!-- /responsive-nav -->
    </div>
    <!-- /container -->
  </nav>
  <!-- /NAVIGATION -->

  <!-- SECTION -->
  <div class="section" id="product">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">

        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <table style="width:35%">
              <tr>
                <td>
                  <button type="button" class="btn-addnew" data-toggle="modal" data-target="#modalAddData">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                      <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
                    </svg>
                    Add New Item
                  </button>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12">
          <div class="row">
            <div class="products-tabs">
              <!-- tab -->


              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Menu</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($selectMW)) { ?>
                    <tr>
                      <td><?= $r['id_barang']; ?></td>
                      <td><img src="../assets/images/profile/<?= $r['foto']; ?>"></td>
                      <td><?= $r['nama_barang']; ?></td>
                      <td>Rp. <?= $r['harga']; ?></td>
                      <td><?= $r['stok']; ?></td>
                      <td>
                        <button class="btn-another" data-toggle="modal" data-target="#modalDetailData<?= $r['id_barang'] ?>">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-box-arrow-up-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5z" />
                            <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0v-5z" />
                          </svg>
                        </button>
                        <button class="btn-login" data-toggle="modal" data-target="#modalEditData<?= $r['id_barang'] ?>">
                          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                          </svg>
                        </button>
                        <a onclick="return confirm('Are you sure? Y/N')" href="hapuscheck.php?id=<?php echo $r['id_barang'] ?>">
                          <button class="btn-logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                          </button>
                        </a>
                      </td>

                      <!-- Modal Detail -->
                      <div class="modal fade" id="modalDetailData<?= $r['id_barang'] ?>" role="dialog" aria-labelledby="modalDetailDataTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">❌</span>
                              </button>
                            </div>
                            <div class="modal-body p-4 py-5 p-md-5">
                              <h3 class="text-center mb-3">Detail Data</h3>
                              <div class="card text-center" style="padding: 30px 0 0;">
                                <img class="card-img-top" src="../assets/images/profile/<?= $r['foto']; ?>" alt="<?= $r['foto']; ?>">
                                <div class="card-body">
                                  <h5 class="card-title" style="padding: 30px 0 0;"><?= $r['nama_barang']; ?></h5>
                                  <br>
                                  <?php

                                  $detail = $r['detail'];
                                  $d = explode(';', $detail);
                                  $noUrut = 0;
                                  while ($noUrut < count($d)) {
                                  ?>
                                    <p class="card-text text-left"><?= $d[$noUrut]; ?></p>
                                    <br>
                                  <?php
                                    $noUrut++;
                                  }
                                  ?>
                                  <button data-dismiss="modal" aria-label="close" class="btn btn-primary">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal Edit -->
                      <div class="modal fade" id="modalEditData<?= $r['id_barang'] ?>" role="dialog" aria-labelledby="modalEditDataTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">❌</span>
                              </button>
                            </div>
                            <div class="modal-body p-4 py-5 p-md-5">
                              <h3 class="text-center mb-3">Edit Data</h3>
                              <form class="signup-form" enctype="multipart/form-data" method="POST">
                                <div class="form-group mb-2">
                                  <label for="id">ID </label>
                                  <input name="id" type="text" class="form-control" value="<?= $r['id_barang']; ?>" readonly>
                                </div>
                                <div class="form-group mb-2">
                                  <label for="nama">Item Name</label>
                                  <input name="nama" type="text" class="form-control" value="<?= $r['nama_barang']; ?>" required>
                                </div>
                                <div class="form-group mb-2">
                                  <label for="detail">Detail</label>
                                  <textarea name="detail" type="text" class="form-control" rows="8" required><?= $r['detail']; ?></textarea>
                                </div>
                                <div class="form-group mb-2">
                                  <label for="harga">Price</label>
                                  <input name="harga" type="number" class="form-control" value="<?= $r['harga']; ?>">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="stok">Stock</label>
                                  <input name="stok" type="number" class="form-control" value="<?= $r['stok']; ?>">
                                </div>
                                <div class="form-group mb-2">
                                  <label for="foto">Photo</label>
                                  <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                  <input name="ubah<?= $r['id_barang']; ?>" type="submit" class="add-form-btn submit px-3" value="Change Data">
                                </div>
                              </form>
                              <?php

                              if (isset($_POST['ubah' . $r['id_barang']])) {
                                $fotoname = $_FILES['foto']['name'];
                                $source = $_FILES['foto']['tmp_name'];
                                $folder = '../assets/images/profile/';
                                $listeks = array('jpg', 'png', 'jpeg');
                                $pecah = explode('.', $fotoname);
                                $eks = $pecah['1'];
                                $namaFoto = date('dmYis') . $fotoname;
                                if ($fotoname != "") {
                                  if (in_array($eks, $listeks)) {
                                    move_uploaded_file($source, $folder . $namaFoto);
                                    $query = mysqli_query($connect, "UPDATE barang SET nama_barang = '" . $_POST['nama'] . "', detail = '" . $_POST['detail'] . "', size = '" . $_POST['size'] . "', harga = '" . $_POST['harga'] . "', stok = '" . $_POST['stok'] . "', foto = '$namaFoto' WHERE id_barang = '" . $r['id_barang'] . "'");

                                    if ($query) {
                                      echo "<script>alert('Data has been change successfully')</script>";
                                      echo "<script>location='admin.php';</script>";
                                    }
                                  } else {
                                    echo "<script>alert('Unsupported format file')</script>";
                                  }
                                } else if ($fotoname == "") {
                                  $query = mysqli_query($connect, "UPDATE barang SET nama_barang = '" . $_POST['nama'] . "', detail = '" . $_POST['detail'] . "', size = '" . $_POST['size'] . "', harga = '" . $_POST['harga'] . "', stok = '" . $_POST['stok'] . "' WHERE id_barang = '" . $r['id_barang'] . "'");

                                  if ($query) {
                                    echo "<script>alert('Data has been change successfully')</script>";
                                    echo "<script>location='admin.php';</script>";
                                  }
                                }
                              }

                              ?>
                            </div>

                          </div>
                        </div>
                      </div>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>

              <!-- Modal Add -->
              <div class="modal fade" id="modalAddData" tabindex="-1" role="dialog" aria-labelledby="modalAddDataTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">❌</span>
                      </button>
                    </div>
                    <div class="modal-body p-4 py-5 p-md-5">
                      <h3 class="text-center mb-3">Add New Item</h3>
                      <form class="signup-form" enctype="multipart/form-data" method="POST">
                        <div class="form-group mb-2">
                          <label for="id">ID </label>
                          <input name="id" type="text" class="form-control" placeholder="ABC000X" required>
                        </div>
                        <div class="form-group mb-2">
                          <label for="nama">Item Name</label>
                          <input name="nama" type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group mb-2">
                          <label for="detail">Detail</label>
                          <textarea name="detail" type="text" class="form-control" rows="8" placeholder="Coffee ..." required></textarea>
                        </div>
                        <div class="form-group mb-2">
                          <label for="harga">Price</label>
                          <input name="harga" type="number" class="form-control" placeholder="xxxxxx">
                        </div>
                        <div class="form-group mb-2">
                          <label for="stok">Stock</label>
                          <input name="stok" type="number" class="form-control" placeholder="xx">
                        </div>
                        <div class="form-group mb-2">
                          <label for="foto">Photo</label>
                          <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                          <input name="tambahMW" type="submit" class="add-form-btn submit px-3" value="Add">
                        </div>
                      </form>

                      <?php

                      if (isset($_POST['tambahMW'])) {
                        $fotoname = $_FILES['foto']['name'];
                        $source = $_FILES['foto']['tmp_name'];
                        $folder = '../assets/images/profile/';
                        $listeks = array('jpg', 'png', 'jpeg');
                        $namaFoto = date('dmYis') . $fotoname;

                        $id_barang = $_POST['id'];
                        $merk = $_POST['merk'];
                        $nama = $_POST['nama'];
                        $detail = $_POST['detail'];
                        $size = $_POST['size'];
                        $harga = $_POST['harga'];
                        $stok = $_POST['stok'];

                        if ($fotoname != "") {
                          move_uploaded_file($source, $folder . $namaFoto);
                          $query = mysqli_query($connect, "INSERT INTO barang VALUES ('$id_barang', '$merk', '$nama', '$detail', '$size', '$harga', '$stok', '$namaFoto')") or die(mysqli_error($connect));

                          if ($query) {
                            echo "<script>alert('Data has been added successfully')</script>";
                            echo "<script>location='admin.php';</script>";
                          }
                        } else if ($fotoname == "") {
                          $query = mysqli_query($connect, "INSERT INTO barang VALUES ('$id_barang', '$merk', '$nama', '" . $_POST['detail'] . "', '$size', '$harga', '$stok', 'noImage.png')");

                          if ($query) {
                            echo "<script>alert('Data has been added successfully')</script>";
                            echo "<script>location='admin.php';</script>";
                          }
                        }
                      }
                      ?>
                    </div>

                  </div>
                </div>
              </div>
              <!-- /tab -->
            </div>
          </div>
        </div>
        <!-- Products tab & slick -->
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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

</body>

</html>