<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/modal2/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="../css/modal2/style.css">
  <title>Smith Indonesia</title>
</head>

<body>
  <?php include '../conn/connect.php'; ?>
  <!-- Modal -->
  <div class="modalBaru">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-body py-0">


          <div class="d-flex main-content">
            <div class="bg-image promo-img mr-3" style="background-image: url('../assets/images/login.jpg');">
            </div>
            <div class="content-text p-4">
              <br>
              <h3>Daftar Akun Baru</h3>
              <p>Daftar akun agar dapat mulai belanja dan mendapatkan promo setiap harinya</p>

              <form method="POST">
                <div class="form-group">
                  <label for="email">Nama</label>
                  <input name="name" type="text" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                  <label for="name">Username</label>
                  <input name="username" type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                  <label for="name">Password</label>
                  <input name="pass" type="password" class="form-control" id="password" required>
                </div>
                <div class="form-group">
                  <input name="submitData" type="submit" value="Daftar" class="btn btn-primary btn-block">
                </div>
              </form>
              <div class="form-group">
                <a href="login.php">
                  <button name="submitData" type="submit" value="Kembali" class="btn btn-secondary btn-block">Kembali</button>
                </a>
              </div>
              <div class="form-group ">
                <p class="custom-note"><small>By signing up you will agree to our <a href="#">Privacy Policy</a></small></p>
              </div>
              <?php

              if (isset($_POST['submitData'])) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = md5($_POST['pass']);
                $sql = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");
                $cek = mysqli_num_rows($sql);
                $data = mysqli_fetch_assoc($sql);

                if ($name == "" || $username == "" || $password == "") {
                  echo "<script>alert('Fill all the Form')</script>";
                } else {
                  if ($cek > 0) {
                    echo "<script>alert('Username already taken')</script>";
                    echo "<script>location='signup.php'</script>";
                  } else if ($cek == 0) {
                    $addQuery = mysqli_query($connect, "INSERT INTO user VALUES(NULL, '" . $name . "', '" . $username . "', '" . $password . "', 'user')");
                    if ($addQuery) {
                      echo "<script>alert('Account has been create successfully')</script>";
                      echo "<script>location='login.php'</script>";
                    }
                  }
                }
              }
              ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <script src="../js/modal2/jquery-3.3.1.min.js"></script>
  <script src="../js/modal2/popper.min.js"></script>
  <script src="../js/modal2/bootstrap.min.js"></script>
  <script src="../js/modal2/main.js"></script>
</body>

</html>