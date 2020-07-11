<!DOCTYPE html>
<html lang="ru">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    
  </head>

    <body>
    <div class="wrapper">    
        
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">PHP/HTML/CSS</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"> <i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/php-pages/posibilities.php">Возможности PHP</a></li>
                        <li><a href="/php-pages/php-use.php">Исползование PHP</a></li>
                        <li><a href="/php-pages/materialize.php">Вреймворк Materialize</a></li>
                        <li><a class="dropdown-button" href="/php-pages/page-code.php" data-activates="dropdown1">Код страницы<i class="material-icons right">arrow_drop_down</i></a>
                          <ul id="dropdown1" class="dropdown-content">
                            <li><a href="../php-pages/php.php">PHP</a></li>
                            <li><a href="../php-pages/css.php">CSS</a></li>
                            <li><a href="../php-pages/javascript.php">JS</a></li>
                            <li><a href="../php-pages/html.php">HTML</a></li>
                          </ul>
                        </li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="/php-pages/posibilities.php">Возможности PHP</a></li>
                        <li><a href="/php-pages/php-use.php">Исползование PHP</a></li>
                        <li><a href="/php-pages/materialize.php">Вреймворк Materialize</a></li>
                        <li><a class="dropdown-button" href="/php-pages/page-code.php" data-activates="dropdown2">Код страницы<i class="material-icons right">arrow_drop_down</i></a>
                          <ul id="dropdown2" class="dropdown-content">
                            <li><a href="/php-pages/php.php">PHP</a></li>
                            <li><a href="/php-pages/css.php">CSS</a></li>
                            <li><a href="/php-pages/javascript.php">JS</a></li>
                            <li><a href="/php-pages/html.php">HTML</a></li>
                          </ul>
                        </li>     
                    </ul>
                </div>
            </div>
        </nav>

        
        
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="img/slider-1.png"> <!-- random image -->
              </li>
              <li>
                <img src="img/slider-2.png"> <!-- random image -->
              </li>
              <li>
                <img src="img/slider-3.jpg"> <!-- random image -->
              </li>
            </ul>
          </div>
          
          
          <div class="parallax-container">
              <div class="parallax"><img src="img/parallax1.2.jpg"></div>
          </div>
          <div class="section white">
            <div class="row container">
              <h2 class="center">Скриптовый язык  общего назначения PНP и его основные возможности.</h2>
                <p class="grey-text text-darken-3 lighten-3">На данном сайте представлены базовые возможности языка PHP, как языка построения страниц и организации структуры сайта, а так же коды коды JavaScript, CSS и PHP, используемые в построении страницы.</p>
            </div>
          </div>
            <div class="parallax-container">
              <div class="parallax"><img src="img/parallax2.2.jpg"></div>
            </div>

</div>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Скриптовый язык  общего назначения PНP и его основные возможности.</h5>
                <p><a class="grey-text text-lighten-3" href="https://github.com/GreeZlyZavr/moodle-learn">Репозиторий GitHub</a></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">МЕНЮ</h5>
                <ul class="hide-on-med-and-down">
                        <li><a class="grey-text text-lighten-3" href="/php-pages/posibilities.php">Исползование PHP</a></li>
                        <li><a class="grey-text text-lighten-3" href="/php-pages/php-use.php">Возможности PHP</a></li>
                        <li><a class="grey-text text-lighten-3" href="/php-pages/materialize.php">Вреймворк Materialize</a></li>
                        <li><a class="dropdown-button grey-text text-lighten-3" href="/php-pages/page-code.php" data-activates="dropdown1">Код страницы<i class="material-icons right">arrow_drop_down</i></a>
                          <ul id="dropdown1" class="dropdown-content">
                            <li><a href="/php-pages/php.php">PHP</a></li>
                            <li><a href="/php-pages/css.php">CSS</a></li>
                            <li><a href="/php-pages/javascript.php">JS</a></li>
                            <li><a href="/php-pages/html.php">HTML</a></li>
                          </ul>
                        </li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Gryazev Timofei
          </div>
        </footer>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      <script>
        $(".button-collapse").sideNav();
      </script>
      <script>
        $(document).ready(function(){ $('.slider').slider();});
      </script>
      <script>  
      $( document ).ready(function(){
        $(".dropdown-button").dropdown();
        $('.parallax').parallax();
      });
      </script>
    </body>
  </html>
 