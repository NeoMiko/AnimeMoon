<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
if(!isset($_SESSION))
{
    session_start();
} 

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    {
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: error.php");
    }
}
else {
    $_SESSION['message'] = "Przepraszamy, weryfikacja nie powiodła się, spróbuj ponownie!";
    header("location: error.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Resetuj swoje hasło</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="rejestracja center-block">

          <h1>Wybierz nowe hasło</h1>

          <form action="reset_password.php" method="post">

          <div class="field-wrap">
            <label>
              Nowe hasło
            </label>
            <input type="password"required name="newpassword" autocomplete="off" placeholder="*"/>
          </div>

          <div class="field-wrap">
            <label>
              Potwierdź hasło
            </label>
            <input type="password"required name="confirmpassword" autocomplete="off" placeholder="*"/>
          </div>

          <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">
          <input type="hidden" name="hash" value="<?= $hash ?>">

          <button class="btn btn-success btn-block"/>Zastosować</button>

          </form>

    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
