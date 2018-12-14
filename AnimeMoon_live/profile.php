

<?php

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Musisz się zalogować przed obejrzeniem strony profilu!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Witam <?php echo $first_name.' '.$last_name; ?> || AnimeMoon</title>
    <?php include 'css/css.html'; ?>
  <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
        <!-- dodaje menu główne -->
    <?php require  ("menu.php"); ?>

<!--        Profile image, I/0-->
   <?php
        $sql = "SELECT * FROM user";
        $result = mysqli_query($mysqli, $sql);
        if (mysql_num_rows($result) > 0) {
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid ='$id'";
            $resultImg = mysqli_query($mysqli, $sqlImg);
            while ($rowImg =  mysqli_fetch_assoc($resultImg)) {
                echo "<div>";
                    if ($rowImg['status'] == 0) {
                        echo "<img src='img/profile".$id.".jpg'>";
                    }else {
                        echo "<img src='img/profile.jpg'>";
                    }
                echo "<div>";
            }
        }
    ?>

  <div class="container">
    <div class="col-xs-12">
      <div class="dlx_header_PanelG">
        <h1>AnimeMoon! Wita Cię <?php echo $first_name;?></h1>
      </div>
            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="clearfix">
                <div class="dlx_ColorBG">
                  <div id="user-profile-3" class="user-profile row">
                    <div class="col-sm-offset-1 col-sm-10">
                      <div class="space"></div>
                      <form class="form-horizontal">
                        <div class="tabbable">
                          <ul class="nav nav-tabs padding-16">
                            <li class="active">
                              <a data-toggle="tab" href="#edit-basic">
                                <i class="glyphicon glyphicon-heart-empty f_red"></i>
                                Informacja
                              </a>
                            </li>

                            <li>
                              <a data-toggle="tab" href="#edit-settings">
                                <i class="glyphicon glyphicon-cog f_grey"></i>
                                Ustawienia
                              </a>
                            </li>

                            <li>
                              <a data-toggle="tab" href="#edit-password">
                                <i class="glyphicon glyphicon-wrench f_green"></i>
                                Hasło
                              </a>
                            </li>
                          </ul>

                          <div class="tab-content profile-edit-tab-content">
                            <div id="edit-basic" class="tab-pane in active">
                              <h4 class="header f_blue bolder smaller">Główne</h4>

                              <div class="row">
                                <div class="col-xs-12 ">
                                  <input type="file" />
                                </div>

                                <div class="vspace-12-sm"></div>

                                <div class="col-xs-12 col-sm-8">
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

                                    <div class="col-sm-8">
                                      <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="Amoon" />
                                    </div>
                                  </div>

                                  <div class="space-4"></div>

                                  <div class="form-group">
                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Imię</label>

                                    <div class="col-sm-8">
                                      <input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="A" />
                                      <input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Moon" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <hr />
                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-date">Rok urodzenia</label>

                                <div class="col-sm-9">
                                  <div class="input-medium">
                                    <div class="input-group">
                                      <input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
                                      <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">Płeć</label>

                                <div class="col-sm-9">
                                  <label class="inline">
                                    <input name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl middle"> Mężczyzna</span>
                                  </label>

                                  &nbsp; &nbsp; &nbsp;
                                  <label class="inline">
                                    <input name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl middle"> Kobieta</span>
                                  </label>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Komentarz</label>

                                <div class="col-sm-9">
                                  <textarea id="form-field-comment"></textarea>
                                </div>
                              </div>

                              <div class="space"></div>
                              <h4 class="header f_blue bolder smaller">Kontakt</h4>
                                <hr>
                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                <div class="col-sm-9">
                                  <span class="input-icon input-icon-right">
                                    <input type="email" id="form-field-email" value="amoon@gmail.com" />
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-website">Twoja strona</label>

                                <div class="col-sm-9">
                                  <span class="input-icon input-icon-right">
                                    <input type="url" id="form-field-website" value="http://www.animemoon.pl/" />
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Telefon</label>

                                <div class="col-sm-9">
                                  <span class="input-icon input-icon-right">
                                    <input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
                                  </span>
                                </div>
                              </div>

                              <div class="space"></div>
                              <h4 class="header f_blue bolder smaller">Social</h4>
                                <hr>
                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

                                <div class="col-sm-9">
                                  <span class="input-icon">
                                    <input type="text" value="facebook_animemoon" id="form-field-facebook" />
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

                                <div class="col-sm-9">
                                  <span class="input-icon">
                                    <input type="text" value="twitter_animemoon" id="form-field-twitter" />
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

                                <div class="col-sm-9">
                                  <span class="input-icon">
                                    <input type="text" value="google_animemoon" id="form-field-gplus" />
                                  </span>
                                </div>
                              </div>
                            </div>

                            <div id="edit-settings" class="tab-pane">
                              <div class="space-10"></div>

                              <div>
                                <label class="inline">
                                  <input type="checkbox" name="form-field-checkbox" class="ace" />
                                  <span class="lbl"> Zrób mój profil publiczny</span>
                                </label>
                              </div>

                              <div class="space-8"></div>

                              <div>
                                <label class="inline">
                                  <input type="checkbox" name="form-field-checkbox" class="ace" />
                                  <span class="lbl"> Wysyłaj mi powiadomienia na Emaila</span>
                                </label>
                              </div>

                              <div class="space-8"></div>

                              <div>
                                <label>
                                  <input type="checkbox" name="form-field-checkbox" class="ace" />
                                  <span class="lbl"> Zachowaj historie mojej konwersacji</span>
                                </label>

                                <label>
                                  <span class="space-2 block"></span>

                                  Na
                                  <input type="text" class="input-mini" maxlength="3" />
                                  dni
                                </label>
                              </div>
                            </div>

                            <div id="edit-password" class="tab-pane">
                              <div class="space-10"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Nowe hasło</label>

                                <div class="col-sm-9">
                                  <input type="password" id="form-field-pass1" />
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Potwierdź hasło</label>

                                <div class="col-sm-9">
                                  <input type="password" id="form-field-pass2" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="clearfix form-actions">
                          <div class="col-md-offset-7 col-md-5">
                            <button class="btn btn-success" type="button">
                              <i class="glyphicon glyphicon-ok fa fa-check"></i>
                              Zachowaj zmiany
                            </button>

                            &nbsp; &nbsp;
                            <button class="btn btn-danger" type="reset">
                              <i class="glyphicon glyphicon-repeat fa fa-undo"></i>
                              Resetuj
                            </button>
                          </div>
                        </div>
                      </form>
                    </div><!-- /.span -->
                  </div><!-- /.user-profile -->
                </div>

                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
    </div>
  </div>

<script src="js/index.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
