<?php
/* Verifies registered user email, the link to this page
   is included in the register.php email message
*/
require 'db.php';
if(!isset($_SESSION))
{
    session_start();
} 

// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0'");

    if ( $result->num_rows == 0 )
    {
        $_SESSION['message'] = "Konto zostało już aktywowane lub adres URL jest nieprawidłowy!";

        header("location: error.php");
    }
    else {
        $_SESSION['message'] = "Twoje konto zostało aktywowane!";

        // Set the user status to active (active = 1)
        $mysqli->query("UPDATE users SET active='1' WHERE email='$email'") or die($mysqli->error);
        $_SESSION['active'] = 1;

        header("location: success.php");
    }
}
else {
    $_SESSION['message'] = "Nieprawidłowe parametry podane w weryfikacji konta!";
    header("location: error.php");
}
?>
