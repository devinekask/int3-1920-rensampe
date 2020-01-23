<section class="process">
  <h2 class="hidden">Process</h2>
  <ul class="steps">
    <li class="step"><a class="step__link" href="index.php?page=cart">winkelwagen</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link step__link-selected" href="index.php?page=information">jouw gegevens</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="index.php?page=information">betaalwijze</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="index.php?page=information">bevestiging</a></li>
  </ul>
</section>

<div class="total__wrapper">
  <section class="cart-total cart-total__information">
    <h2 class="cart__title">Totaalprijs</h2>
    <?php
      $subtotal = 0;
      foreach($_SESSION['cart'] as $item) {
        $itemTotal = $item['product']['price'] * $item['quantity'];
        $subtotal += $itemTotal;
      }
    ?>
    <?php
      $discount = 0;
      $total = $subtotal - $discount;
    ?>
    <ul class="cart-total__items">
      <li class="cart-total__item">
        <p class="cart-total__text">Subtotaal</p>
        <p class="cart-total__text"><?php echo money_format('€ %!n', $subtotal); ?></p>
      </li>
      <li class="cart-total__item">
        <p class="cart-total__text">Kortingscode</p>
        <p class="cart-total__text">- <?php echo money_format('€ %!n', $discount); ?></p>
      </li>
      <li class="cart-total__item">
        <p class="cart-total__text">Levering</p>
        <p class="cart-total__text">Gratis</p>
      </li>
      <li class="cart-total__item cart-total__item-price">
        <p class="cart-total__text">Totaal</p>
        <p class="cart-total__text"><?php echo money_format('€ %!n', $total); ?></p>
      </li>
    </ul>
  </section>
  <section class="cart-information">
    <h2 class="cart__title">Jouw gegevens</h2>
    <form class="information" action="index.php?page=payment" method="post" id="cartform">
      <p class="error"></p>
      <div class="information__item">
        <label for="fname" class="information__item-name">Voornaam<p class="error"></p></label>
        <input id="fname" class="input code__input information__item-input" type="text" name="fname" required></input>
      </div>
      <div class="information__item">
        <label for="lname" class="information__item-name">Achternaam<p class="error"></p></label>
        <input id="lname" class="input code__input information__item-input" type="text" name="lname" required></input>
      </div>
      <div class="information__item">
        <label for="email" class="information__item-name">E-mailadres<p class="error"></p></label>
        <input id="email" class="input code__input information__item-input" type="email" name="email" required></input>
      </div>
      <div class="information__address">
        <div class="information__address__item information__address__item-street">
          <label for="street" class="information__item-name">Straat<p class="error"></p></label>
          <input id="street" class="input code__input information__item-input information__item-input-wide" type="text" name="street" required></input>
        </div>
        <div class="information__address__item information__address__item-number">
          <label for="number" class="information__item-name">Huisnr.<p class="error"></p></label>
          <input id="number" class="input code__input information__item-input information__item-input-tight" type="number" name="number" min="0" required></input>
        </div>
        <div class="information__address__item information__address__item-bus">
          <label for="bus" class="information__item-name">Bus</label>
          <input id="bus" class="input code__input information__item-input information__item-input-tight" type="text" name="bus"></input>
        </div>
        <div class="information__address__item information__address__item-place">
          <label for="place" class="information__item-name">Woonplaats<p class="error"></p></label>
          <input id="place" class="input code__input information__item-input information__item-input-wide" type="text" name="place" required></input>
        </div>
      </div>
      <button class="information__button button cart-button <?php if(empty($_SESSION['cart'])) { display:hidden; } ?>" type="submit" id="checkout" name="action" value="checkout">Betaalwijze</button>
    </form>
  </section>
</div>
