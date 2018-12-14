<!--
||||||||||||||||||||||||||||||||||||||

Design by Kamil Tchoryk
Developed by Kamil Tchoryk
all rights reserved @2017

||||||||||||||||||||||||||||||||||||||
-->
<?php
/* Displays user information and some useful messages */
if(!isset($_SESSION))
{
    session_start();
}

// Check if user is logged in using the session variable
if ( isset($_SESSION['logged_in']) != 1 ) {
    $first_name = "Guest A.";
    $visibility_l = "show";
    $visiblity_r = "show";
    $visiblity_o = "hidden";
    $visiblty_b = "hidden";
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $visibility_l = "hidden";
    $visiblity_r = "hidden";
    $visiblity_o = "show";
    $visiblty_b = "show";
}
?>

<nav class="dlx_menu" tabindex="0">
  <div class="dlx_smartphone-menu-trigger"></div>
  <header class="dlx_avatar">
    <a href="profile.php"><img src="img/pr.jpeg" /></a>

    <h2><?php echo $first_name; ?></h2>
  </header>
  <ul>
    <a href="biblioteka_main.php"><li tabindex="1" class="icon-globe"><span>Biblioteka Główna</span></li></a>
    <a href="biblioteka_priv.php" class="<?php echo $visiblty_b; ?>"><li tabindex="2" class="icon-book"><span>Twoja biblioteka</span></li></a>
    <a href=""><li tabindex="3" class="icon-users"><span>Użytkownicy</span></li></a>
    <a href=""><li tabindex="4" class="icon-settings"><span>Opcje</span></li></a>
    <a href="login_p.php" class="<?php echo $visibility_l; ?>"><li tabindex="5" class="icon-lock green"><span>Zaloguj się</span></li></a>
    <a href="register_p.php" class="<?php echo $visiblity_r; ?>"><li tabindex="6" class="icon-add-user blue"><span>Zarejestruj się</span></li></a>
    <a href="logout.php" class="<?php echo $visiblity_o; ?>"><li tabindex="7" class="icon-emoji-sad red"><span>Wyjdź</span></li></a>
  </ul>
  <div class="dlx_nav_social">
    <ul>
      <a href=""><li class="icon-facebook"></li></a>
      <a href=""><li class="icon-twitter"></li></a>
      <a href=""><li class="icon-youtube"></li></a>
      <a href=""><li class="icon-code"></li></a>
    </ul>
  </div>
</nav>
