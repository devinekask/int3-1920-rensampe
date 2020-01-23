<section class="process">
  <h2 class="hidden">Process</h2>
  <ul class="steps">
    <li class="step"><a class="step__link" href="index.php?page=cart">winkelwagen</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10" height="11">
    <li class="step"><a class="step__link" href="index.php?page=information">jouw gegevens</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10" height="11">
    <li class="step"><a class="step__link step__link-selected" href="index.php?page=payment">betaalwijze</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10" height="11">
    <li class="step"><a class="step__link" href="index.php?page=payment">bevestiging</a></li>
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

  <section class="cart-total cart-information__information cart-information__payment">
    <h2 class="cart__title cart__title-information">Jouw gegevens</h2>
    <div class="cart-information__payment-item">
      <img class="cart-information__payment-item__img" src="assets/img/name.svg" alt="Persoon" width="16" height="16">
      <p><?php echo $_POST['fname'] . ' ' . $_POST['lname']; ?></p>
    </div>
    <div class="cart-information__payment-item">
      <img class="cart-information__payment-item__img" src="assets/img/email.svg" alt="Envelop" width="16" height="13">
      <p><?php echo $_POST['email']; ?></p>
    </div>
    <div class="cart-information__payment-item">
      <img class="cart-information__payment-item__img" src="assets/img/address.svg" alt="Locatie" width="16" height="16">
      <p><?php echo $_POST['street'] . ' ' . $_POST['number'] . ','; ?></p>
      <p class="cart-information__payment-item__place"><?php echo $_POST['place'] ; ?></p>
    </div>
  </section>

  <section class="cart-information cart-payment">
      <h2 class="cart__title">Betaalwijze</h2>
      <form class="payment information" action="" method="post" id="handelCheckout">
        <p class="payment-bigerror error"></p>
        <div class="payment__item">
          <label class="payment__item-wrapper">
            <input class="input form-submit payment__item-radio" name="payment-radio" type="radio" required>
            <p class="payment__item-title">PayPal<p class="payment-error error"></p></p>
            <p class="payment__item-text">Je wordt doorgestuurd naar PayPal om je betaling te voltooien.</p>
          </label>
        </div>
        <div class="payment__item">
          <label class="payment__item-wrapper">
            <input class="input form-submit payment__item-radio" name="payment-radio" type="radio">
            <p class="payment__item-title">Kredietkaart<p class="payment-error error"></p></p>
            <div class="payment__item-wrapper__name">
              <label class="input-name">Naam op kaart
                <input class="code__input code__input-payment" type="text" value="<?php echo $_POST['fname'] . ' ' . $_POST['lname']; ?>">
              </label>
            </div>
            <div class="payment__item-wrapper__number">
              <label class="input-name">Kredietkaartnummer
                <input class="code__input code__input-payment" type="text">
              </label>
            </div>
            <div class="payment__item-wrapper__date payment__item-wrapper__date-cvc">
              <div>
                <label class="input-name">Geldig tot
                  <input class="code__input code__input-payment-tight" type="text" value="02/20">
                </label>
              </div>
              <div class="cvc">
                <label class="input-name">CVC / CVV
                  <input class="code__input code__input-payment-tight code__input-payment-cvc" type="text">
                </label>
              </div>
            </div>
          </label>
        </div>
        <div class="payment__item">
          <label class="payment__item-wrapper">
            <input class="input form-submit payment__item-radio" name="payment-radio" type="radio" required>
            <p class="payment__item-title">Debetkaart<p class="payment-error error"></p></p>
            <div class="payment__item-wrapper__name">
              <label class="input-name">Naam op kaart
                <input class="code__input code__input-payment" type="text" value="<?php echo $_POST['fname'] . ' ' . $_POST['lname']; ?>">
              </label>
            </div>
            <div class="payment__item-wrapper__number">
              <label class="input-name">Debetkaartnummer
                <input class="code__input code__input-payment" type="text">
              </label>
            </div>
            <div class="payment__item-wrapper__date">
              <label class="input-name">Geldig tot
                <input class="code__input code__input-payment-tight" type="text" value="02/20">
              </label>
            </div>
          </label>
        </div>
        <button class="information__button button cart-button <?php if(empty($_SESSION['cart'])) { display:hidden; } ?>" type="submit" id="checkout" name="action" value="handleCheckout">betalen</button>
      </form>
  </section>
</div>
