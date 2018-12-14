<?php
/* Log out process, unsets and destroys session variables */
if(!isset($_SESSION))
{
    session_start();
} 
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>

<body class="clearMarginMenu">
    <div class="center-block rejestracja">
          <h1>Dzięki, że wpadłeś</h1>

          <p><?= 'Zostałeś wylogowany!'; ?></p>

          <a href="index.php"><button class="btn btn-success btn-block">Strona Główna</button></a>

    </div>
</body>
</html>
