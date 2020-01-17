<section class="process">
  <ul class="steps">
    <li class="step"><a class="step__link step__link-selected" href="index.php?page=cart">winkelwagen</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="index.php?page=cart">jouw gegevens</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="index.php?page=cart">betaalwijze</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="index.php?page=cart">bevestiging</a></li>
  </ul>
</section>

<div class="cart-code-total__wrapper">
  <section class="cart">
    <div class="cart__wrapper"></div>
    <h2 class="cart__title">winkelwagen</h2>
    <form action="index.php?page=cart" method="post" id="cartform">
          <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;
          ?>
          <ul class="item">
            <li class='product-image'>
              <a href="index.php?page=detail&amp;id=<?php echo $item['product']['id'];?>">
                <img src="<?php echo 'assets/img/' . $item['product']['type'] . '/' . $item['product']['type'] . $item['product']['id'] . '.jpg'; ?>"  alt="<?php echo $item['product']['title'];?>" width="50" height="60"/>
              </a>
            </li>
            <li class='product-description'>
              <p class="product-description__title"><?php echo $item['product']['title'];?></p>
              <span class="product-description__subtitle"><?php echo $item['product']['type'] . ' - ' . $item['product']['subtitle'];?></span>
              <p class='product-description__price'><?php echo money_format("%i", $item['product']['price']);?></p>
            </li>
            <li class='product-quantity'><input class="text product-quantity__quantity" type="number" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /> </li>
            <li class='remove-item'><button type="submit" class="remove-from-cart" name="remove" value="<?php echo $item['product']['id'];?>"><img src="assets/img/remove.svg" alt="Remove" width="14px" height="14px"></button></li>
            <li class='product-total'><?php echo money_format("%i", $itemTotal);?></li>
          </ul>
          <?php
          }
          ?>
        <div class='total'>
          <p><button type="submit" id="update-cart" class="button-small button-update" name="action" value="update">Update Cart</button></p>
        </div>
    </form>
  </section>

  <section class="code">
    <h2 class="cart__title">Kortingscode</h2>
    <form action="">
      <input class="code__input" type="text">
      <button class="button code__button" type="submit">toevoegen</button>
    </form>
  </section>

  <section class="cart-total">
    <h2 class="cart__title">Totaalprijs</h2>
    <ul class="cart-total__items">
      <li class="cart-total__item">
        <p class="cart-total__text">Subtotaal</p>
        <p class='cart-total__text order-total'><?php echo money_format("%i", $total);?></p>
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
        <p class="cart-total__text">234EUR</p>
      </li>
    </ul>
    <form action="index.php?page=information" method="post" id="cartform">
      <p><button class="btn-reversed button cart-button" type="submit" id="checkout" name="action" value="checkout">Jouw gegevens</button></p>
    </form>
  </section>

</div>
