<!--
||||||||||||||||||||||||||||||||||||||

Design by Kamil Tchoryk
Developed by Kamil Tchoryk
all rights reserved @2017

||||||||||||||||||||||||||||||||||||||
-->

<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
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
    if (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

<body class="dlx_ov_hidden">

        <!-- dodaje menu główne -->
    <?php require  ("menu.php"); ?>

  <div class="container">
    <div class="row">
      <div class="center-block rejestracja">
        <form class="form-horizontal" action="register_p.php" method="post" autocomplete="off">
          <div class="dlx_rejestracja_baner">
            <h1>Anime Moon <small class="text-primary">Rejestracja</small></h1>
          </div>
          <div class="form-group">
            <label for="imie" class="col-sm-2 control-label">Imię</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="imie" placeholder="Lelouch *" name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label for="nazwisko" class="col-sm-2 control-label">Nazwisko</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nazwisko" placeholder="Lamperouge *" name="lastname">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" placeholder="Haku_@animemoon.com *" name="email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Hasło</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" placeholder="Hasło *" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="terms"> Przeczytałem i aceptuje warunki.
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" name="register">Zarejestruj mnię</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <img src="img/baner1.png" alt="" class="baner img-responsive">

	  <script src="js/index.js"></script>  
      <script src="js/bootstrap.min.js"></script>


</body>
</html>