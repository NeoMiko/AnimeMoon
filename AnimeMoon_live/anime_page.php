<!--
||||||||||||||||||||||||||||||||||||||

Design by Kamil Tchoryk
Developed by Kamil Tchoryk
all rights reserved @2017

||||||||||||||||||||||||||||||||||||||
-->



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>AnimeMoon ~~ Anime</title>
    <?php include 'css/css.html'; ?>
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>

        <!-- dodaje menu główne -->
    <?php require  ("menu.php"); ?>

<main>
  <div class="container">
    <div class="col-xs-12 header_anime">
      <figure class="dlx_img_baner">
        <img src="img/2.png" alt="baner">
      </figure>
      <figure class="dlx_img_post" style="background-image: url('img/b2.jpg')"></figure>
      <div class="dlx_baner_opis">
        <p class="h3">Akame ga kill</p>
      </div>
    </div>
      <div class="col-xs-12">
        <div class="dlx_anime_content">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-4 col-xs-12">
              <div class="dlx_ItemBox">
                <span class="dlx_timeShow">25m</span>
                CZAS TRWANIA
              </div>
              <div class="dlx_ItemBox">
                <span class="dlx_odc">12</span>
                ODCIONKÓW
              </div>
              <div class="dlx_ItemBox">
                <span class="dlx_rokWydania">2004</span>
                ROK WYDANIA
              </div>
              <div class="dlx_ItemBox">
                <span class="dlx_rodzaj">Serial</span>
                RODZAJ
              </div>
              <div class="row lead dlx_ItemBox_serca">
                <div id="hearts" class="serca"></div>
                   Twoja ocena to: <span id="count">0</span>
              </div>
            </div>
          </div>
          <div class="row dlx_page_custom">
            <div class="col-md-3">
              <div class="dlx_status">
                  <h2>Status</h2>
                  <button class="btn btn-primary btn-block">Oglądam</button>
                  <button class="btn btn-primary btn-block">Obejrzałem</button>
                  <button class="btn btn-primary btn-block">Muszę obejrzeć</button>
                  <button class="btn btn-primary btn-block">Ulubione</button>
                  <h2>Gatunek</h2>
                  <div class="dlx_gatunek">
                    <ul>
                      <li>Horror</li>
                      <li>Seinen</li>
                      <li>Adventure</li>
                    </ul>
                  </div>
              </div>
            </div>  
            <div class="col-md-9">
                <p class="h1">Recenzja</p>
              <div class="dlx_recenzja">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore dolores quam saepe soluta sunt consequatur doloribus quaerat, voluptates recusandae ex non aperiam numquam! Sunt delectus, corrupti voluptatem excepturi laborum consequuntur nostrum nulla eum, similique aut animi. Optio, necessitatibus, non.
              </div>
              <h1>Podoba się? zostaw twoją opinię</h1>
              <div class="dlx_form_komentarze">
                <form action="" method="POST" align="right">
                  <textarea class="form-control dlx_textarea" placeholder="Napisz twoje zdanie na temat tego anime." rows="6"></textarea>
                  <hr>
                  <button class="btn btn-success" type="submit" value="1" name="send_com">Publikuj komentarz</button>
                </form>
              </div><!--  Koniec formularza komentarzy -->
              <div class="dlx_komentarze">
                <img src="img/pr.jpeg" alt="avatar darkpvp" class="img-circle dlx_kom_avatar">
                <a href="" class="dlx_name_kom">Darkpvp</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio odio voluptate praesentium ut itaque, fuga accusantium velit ratione, dignissimos perspiciatis molestias maiores, iure minus rerum. Modi voluptatem molestias officia dignissimos!</p>
              </div>
              <div class="dlx_komentarze">
                <img src="img/profil.png" alt="avatar darkpvp" class="img-circle dlx_kom_avatar">
                <a href="" class="dlx_name_kom">Guest</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio odio voluptate praesentium ut itaque, fuga accusantium velit ratione, dignissimos perspiciatis molestias maiores, iure minus rerum. Modi voluptatem molestias officia dignissimos!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>

	<script src="js/index.js"></script> 
  <script src="js/bootstrap.min.js"></script> 


</body>
</html>