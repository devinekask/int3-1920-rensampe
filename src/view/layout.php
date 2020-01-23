<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humo - <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
  <?php if($_GET['page'] != 'longread'){ ?>
    <header class="header">
      <h1 class="hidden">Humo</h1>
      <nav class="menu">
        <div id="menuToggle">
        <input class="hamburger sticky" type="checkbox"/>
        <span></span>
        <span class="hamburger__two"></span>
        <span class="hamburger__three"></span>
          <div class="menu__wrapper">
            <ul class="menu__items">
              <li class="menu__item-video"><a href="" class="menu__link menu__link-video">video</a></li>
              <li class="menu__item"><a href="" class="menu__link">tv-gids</a></li>
              <li class="menu__item"><a href="" class="menu__link">zoekertjes</a></li>
              <li class="menu__item"><a href="" class="menu__link">abonnement nemen</a></li>
              <li class="menu__item"><a href="index.php" class="menu__link menu__link-selected">webshop</a></li>
            </ul>
            <ul class="menu__items menu__items-second">
              <li class="menu__item"><a href="" class="menu__link menu__link-nuinhumo">nu in humo</a></li>
              <li class="menu__item"><a href="" class="menu__link">login</a></li>
              <li class="menu__item"><a href="" class="menu__link">registreer</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <nav class="menu-two" id="menu-two">
        <div class="menu-two__items">
          <ul class="menu-two__wrapper">
            <li class="menu-two__item"><a href="" class="menu-two__link">home</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">actua</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">humor</a></li>
            <a class="logo-link" href="">
              <img class="logo-image" id="logo-svg" src="/assets/img/humologo.svg" alt="Logo Humo" width="210" height="70">
            </a>
            <li class="menu-two__item"><a href="" class="menu-two__link">tv/film</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">muziek</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">boeken</a></li>
          </ul>
          <div class="menu-two__item-cart">
            <p class="item-cart"><?php echo $numItems;?></p>
            <a href="index.php?page=cart" class="menu-two__link">
              <img class="item-cart__image" src="/assets/img/cart.svg" alt="Winkelwagen" width="27" height="21">
            </a>
          </div>
        </div>
      </nav>
    </header>


    <main id="main">
    <?php } ?>
    <?php echo $content;?>
    <?php if($_GET['page'] != 'longread'){ ?>
    </main>
    <div class="footer__wrapper">
      <footer class="footer">
        <img class="footer__dpgmedia" src="/assets/img/dpgmedia.svg" alt="Dpg Media logo" width="44" height="26">
        <p class="footer__text">&copy; 2020 DPG Media</p>
        <div class="footer__socials">
          <a href="" class="social"><img src="/assets/img/twitter.svg" alt="Humo Twitter" class="social-image" width="16" height="14"></a>
          <a href="" class="social"><img src="/assets/img/facebook.svg" alt="Humo Facebook" class="social-image" width="8" height="16"></a>
          <a href="" class="social"><img src="/assets/img/instagram.svg" alt="Humo Instagram" class="social-image" width="16" height="16"></a>
        </div>
      </footer>
    </div>
    <?php } ?>
    <?php echo $js; ?>
  </body>
</html>
