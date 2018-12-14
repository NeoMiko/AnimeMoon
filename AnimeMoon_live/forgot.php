<?php
/* Reset your password form, sends reset.php password link */
require 'db.php';
if(!isset($_SESSION))
{
    session_start();
} 

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    {
        $_SESSION['message'] = "Użytkownik z tym e-mailem nie istnieje!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Proszę sprawdzić email <span>$email</span>"
        . " Do linku potwierdzającego, aby zakończyć resetowanie hasła!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Link do resetowania hasła ( hakumoon.com )';
        $message_body = '
        Witam '.$first_name.',

        Zażądałeś reset hasła!

        Kliknij ten link, aby zresetować hasło:

        http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Resetuj twoje hasło</title>
  <?php include 'css/css.html'; ?>
</head>

<body class="clearMarginMenu">

  <div class="rejestracja center-block">

    <h1>Resetuj swoje hasło</h1>

    <form action="forgot.php" method="post">
     <div class="padding_bottom">
      <label>Email Address</label>
      <input type="email" required autocomplete="off" name="email" placeholder="*"/>
    </div>
    <button class="btn btn-danger btn-block">Resetuj</button>
    </form>
  </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
