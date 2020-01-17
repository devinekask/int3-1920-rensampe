<section class="process">
  <h2 class="hidden">Process</h2>
  <ul class="steps">
    <li class="step"><a class="step__link" href="index.php?page=cart">winkelwagen</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link step__link-selected" href="index.php?page=information">jouw gegevens</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="index.php?page=information">betaalwijze</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="index.php?page=information">bevestiging</a></li>
  </ul>
</section>

<div class="total__wrapper">
  <section class="cart-total cart-total__information">
    <h2 class="cart__title">Totaalprijs</h2>
    <?php
      $total = 0;
      foreach($_SESSION['cart'] as $item) {
        $itemTotal = $item['product']['price'] * $item['quantity'];
        $total += $itemTotal;
    ?>
    <ul class="cart-total__items">
      <li class="cart-total__item">
        <p class="cart-total__text">Subtotaal</p>
        <p class='cart-total__text order-total'><?php echo money_format('€ %!n', $total); ?></p>
      </li>
      <li class="cart-total__item">
        <p class="cart-total__text">Kortingscode</p>
        <p class="cart-total__text">- 0EUR</p>
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
    <?php
      }
    ?>
    <form action="index.php?page=information" method="post" id="cartform">
      <p><button class="btn-reversed button cart-button <?php if(empty($_SESSION['cart'])) { display:hidden; } ?>" type="submit" id="checkout" name="action" value="checkout">Jouw gegevens</button></p>
    </form>
  </section>
  <section class="cart-information">
    <h2 class="cart__title">Jouw gegevens</h2>
  </section>
</div>
