<?php
/* Displays all error messages */
if(!isset($_SESSION))
{
    session_start();
} 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="rejestracja">
    <h1>Error</h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <a href="index.php"><button class="btn btn-success btn-block">Strona główna</button></a>
</div>
</body>
</html>
