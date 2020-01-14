<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Humo - <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <header class="header">
      <nav class="menu">
        <ul class="menu__wrapper">
          <div class="menu__items">
            <li class="menu__item-video"><a href="" class="menu__link-video">video</a></li>
            <li class="menu__item"><a href="" class="menu__link">tv-gids</a></li>
            <li class="menu__item"><a href="" class="menu__link">zoekertjes</a></li>
            <li class="menu__item"><a href="" class="menu__link">abonnement nemen</a></li>
            <li class="menu__item"><a href="" class="menu__link menu__link-selected">webshop</a></li>
          </div>
          <div class="menu__items menu__items-second">
            <li class="menu__item"><a href="" class="menu__link menu__link-nuinhumo">nu in humo</a></li>
            <li class="menu__item"><a href="" class="menu__link">login</a></li>
            <li class="menu__item"><a href="" class="menu__link">registreer</a></li>
          </div>
        </ul>
      </nav>
      <nav class="menu-two" id="menu-two">
        <ul class="menu-two__items">
          <div class="menu-two__wrapper">
            <li class="menu-two__item"><a href="" class="menu-two__link">home</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">actua</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">humor</a></li>
            <div class="logo">
              <a class="logo-link" href="">
                <img class="logo-image" id="logo-svg" src="assets/img/humologo.svg" alt="Logo Humo" width="210" height="70">
                <h1 class="hidden">Humo</h1>
              </a>
            </div>
            <li class="menu-two__item"><a href="" class="menu-two__link">tv/film</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">muziek</a></li>
            <li class="menu-two__item"><a href="" class="menu-two__link">boeken</a></li>
          </div>
          <li class="menu-two__item-cart">
            <p class="item-cart">0</p>
            <a href="" class="menu-two__link">
              <img src="assets/img/cart.svg" alt="Winkelwagen" width="27px" height="21px">
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
    <?php echo $content;?>
    </main>
    <footer class="footer">
      <div class="footer__wrapper">
        <img src="assets/img/dpgmedia.svg" alt="Dpg Media logo" width="44px" height="26px">
        <p class="footer__text">&copy; 2020 DPG Media</p>
        <div class="footer__socials">
          <a href="" class="social"><img src="assets/img/twitter.svg" alt="Humo Twitter" class="social-image" width="16px" height="14px"></a>
          <a href="" class="social"><img src="assets/img/facebook.svg" alt="Humo Facebook" class="social-image" width="8px" height="16px"></a>
          <a href="" class="social"><img src="assets/img/instagram.svg" alt="Humo Instagram" class="social-image" width="16px" height="16px"></a>
        </div>
      </div>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
