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
              <br>
              <br>
              <h3>Masuk</h3>
              <p>Ayo masuk, saatnya untuk belanja dan jangan lupa ambil bonus hariannya</p>

              <form method="POST">
                <div class="form-group">
                  <label for="name">Username</label>
                  <input name="username" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="name">Password</label>
                  <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                  <input name="submitData" type="submit" value="Masuk" class="btn btn-primary btn-block">
                </div>
              </form>
              <div class="form-group">
                <a href="signup.php">
                  <button name="submitData" type="submit" value="Daftar" class="btn btn-secondary btn-block">Daftar</button>
                </a>
              </div>

              <?php

              if (isset($_POST['submitData'])) {
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                $sql = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
                $cek = mysqli_num_rows($sql);
                $data = mysqli_fetch_assoc($sql);

                if ($cek > 0 && $data['level'] == 'admin') {
                  session_start();
                  $_SESSION['username'] = $username;
                  $_SESSION['data'] = $data;
                  $_SESSION['level'] = 'admin';
                  header('location:index.php');
                } else if ($cek > 0 && $data['level'] == 'user') {
                  session_start();
                  $_SESSION['username'] = $username;
                  $_SESSION['data'] = $data;
                  $_SESSION['level'] = 'user';
                  header('location:index.php');
                } else {
                  echo "<script>alert('Username atau Password salah')</script>";
                  echo "<script>location='login.php'</script>";
                }
              }

              ?>
              <br>
              <br>
              <br>
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