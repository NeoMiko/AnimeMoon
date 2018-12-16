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
  <title>Anime Moon</title>
  <meta name="description" content="Anime Moon ~~ Twoja biblioteka online!!">
  <meta name="keywords" content="Anime,AnimeMoon,Moon,biblioteka,online" />
  <?php include 'css/css.html'; ?>
  <script src="js/jquery-3.1.1.min.js"></script>
</head>

<body>

          <!-- dodaje menu główne -->
    <?php require  ("menu.php"); ?>

<main>
  <div class="container">
    <div class="row">

    <div class="col-9">

      <!-- deck n1 -->
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        </div>
        <!-- deck n2 -->
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          </div>
          <!-- deck n3 -->
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/b1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            </div>

    </div>
    <div class="col-3">
      <div class="dlx_szukaj_body">
        <h3>Szukaj!</h3>
        <input type="text" name="search" class="form-control">
        <h3>Rodzaje</h3>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="rodzaje" value="1">Movie</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="rodzaje" value="2">Music</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="rodzaje" value="3">ONA</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="rodzaje" value="4">OVA</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="rodzaje" value="5">Special</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="rodzaje" value="6">TV</label>
          </div>
        <h3>Gatunki</h3>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="7">Adventure</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="8">Comendy</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="9">Parody</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="10">Historical</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="11">Horror</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="12">Supernatural</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="13">Drama</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="14">Romance</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="15">Action</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="16">Mecha</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="17">Military</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="18">Sci-Fi</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="19">Game</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="20">Shounen</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="21">Kids</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="22">Space</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="23">Sports</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="24">Mystery</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="25">Slice of Life</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="26">Music</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="27">Yaoi</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="28">Magic</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="29">Seinen</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="30">Fantasy</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="31">Psychological</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="32">Thriller</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="33">Ecchi</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="34">Martial Arts</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="35">Samurai</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="36">Shoujo</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="37">School</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="38">Super Power</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="39">Dementia</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="40">Demons</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="41">Cars</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="42">Harem</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="43">Vampire</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="44">Shounen Ai</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="45">Police</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="46">Shoujo Ai</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="47">Josei</label>
          </div>
          <div class="checkbox dlx_filtr">
            <label><input type="checkbox" name="gatunki" value="48">
            <i class="dlx_flt text-primary "></i>
            Yuri</label>
          </div>
          <button type="submit" class="btn btn-success btn-block">Filtruj!</button>
          <script type="text/javascript">
             $('.dlx_filtr input[type="checkbox"]').on('change', function() { if($(this).is(':checked')) { $(this).parent().find('i').css('display', 'inline-block'); } else { $(this).parent().find('i').css('display', 'none'); } }); $('.type input[type="checkbox"]').on('change', function() { if($(this).is(':checked')) { $(this).parent().find('i').css('display', 'inline-block'); } else { $(this).parent().find('i').css('display', 'none'); } });
          </script>
      </div>
    </div>
  </div>
  <nav aria-label="biblioteka_main">
    <ul class="pagination pagination-lg">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">1</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
  </nav>
  </div>
</main>

    <script src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
