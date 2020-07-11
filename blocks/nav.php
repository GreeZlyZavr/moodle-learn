<?php 

echo '<nav>
<div class="container">
    <div class="nav-wrapper">
        <a href="../index.php" class="brand-logo">PHP/HTML/CSS</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"> <i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="grey-text text-lighten-3" href="../php-pages/posibilities.php">Исползование PHP</a></li>
          <li><a class="grey-text text-lighten-3" href="../php-pages/php-use.php">Возможности PHP</a></li>
          <li><a class="grey-text text-lighten-3" href="../php-pages/materialize.php">Вреймворк Materialize</a></li>
          <li><a class="dropdown-button" href="../php-pages/page-code.php" data-activates="dropdown1">Код страницы<i class="material-icons right">arrow_drop_down</i></a>
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="../php-pages/php.php">PHP</a></li>
              <li><a href="../php-pages/css.php">CSS</a></li>
              <li><a href="../php-pages/javascript.php">JS</a></li>
              <li><a href="../php-pages/html.php">HTML</a></li>
            </ul>
          </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="../index.php">Главная страница</a></li>
            <li><a href="../php-pages/posibilities.php">Возможности PHP</a></li>
            <li><a href="../php-pages/php-use.php">Исползование PHP</a></li>
            <li><a href="../php-pages/materialize.php">Вреймворк Materialize</a></li>
            <li><a class="dropdown-button" href="../php-pages/page-code.php" data-activates="dropdown2">Код страницы<i class="material-icons right">arrow_drop_down</i></a>
              <ul id="dropdown2" class="dropdown-content">
                <li><a href="../php-pages/php.php">PHP</a></li>
                <li><a href="../php-pages/css.php">CSS</a></li>
                <li><a href="../php-pages/javascript.php">JS</a></li>
                <li><a href="../php-pages/html.php">HTML</a></li>
              </ul>
            </li>     
        </ul>
    </div>
</div>
</nav>';

?>