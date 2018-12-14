<!--
||||||||||||||||||||||||||||||||||||||

Design by Kamil Tchoryk
Developed by Kamil Tchoryk
all rights reserved @2017

||||||||||||||||||||||||||||||||||||||
-->

<?php
//db connection
    require 'db.php';
    if(!isset($_SESSION))
{
    session_start();
} 
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>AnimeMoon ~~ Dołącz do nas</title>
  <?php include 'css/css.html'; ?>
  <script src="js/jquery-3.1.1.min.js"></script>
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    }
}
?>

<body class="dlx_ov_hidden">

        <!-- dodaje menu główne -->
    <?php require  ("menu.php"); ?>


  <div class="container">
    <div class="row">
      <div class="center-block rejestracja">
        <form class="form-horizontal" action="login_p.php" method="post" autocomplete="off">
          <div class="dlx_rejestracja_baner">
            <h1>Anime Moon <small class="text-primary">Login</small></h1>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" required autocomplete="off" name="email" placeholder="Example_@animemoon.com">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Hasło</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" required autocomplete="off" name="password" placeholder="Hasło">
            </div>
          </div>

            <div class="col-sm-offset-7 col-sm-10">
              <p><a href="forgot.php">Nie pamiętam hasła</a></p>
            </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" name="login">Zaloguj mnie</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <img src="img/baner1.png" alt="anime_footer" class="baner img-responsive">


  <script src="js/index.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>
</html>
