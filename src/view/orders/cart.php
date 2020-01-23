<section class="process">
  <h2 class="hidden">Process</h2>
  <ul class="steps">
    <li class="step"><a class="step__link step__link-selected" href="index.php?page=cart">winkelwagen</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10" height="11">
    <li class="step"><a class="step__link" href="index.php?page=<?php
      if(!empty($_SESSION['cart'])) {
        echo 'information';
      }else{
        echo 'cart';
      } ?>
      ">jouw gegevens</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10" height="11">
    <li class="step"><a class="step__link" href="index.php?page=cart">betaalwijze</a></li>
    <img class="step__image" src="assets/img/next.svg" alt="Next" width="10" height="11">
    <li class="step"><a class="step__link" href="index.php?page=cart">bevestiging</a></li>
  </ul>
</section>

<div class="cart-code-total__wrapper">
  <section class="cart">
    <div class="cart__wrapper"></div>
    <h2 class="cart__title">Winkelwagen</h2>
    <form name="korting" action="index.php?page=cart" method="post" id="cartform">
          <?php
          if(empty($_SESSION['cart'])) {
            echo '
            <div class="cart__empty">
              <span class="cart__empty-text" >Je winkelwagen is leeg.</span>
              <a href="index.php" class="button cart__empty-button">verder winkelen</a>
            </div>';
          }

          $subtotal = 0;
          $discount = 0;

          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $subtotal += $itemTotal;
          ?>
          <ul class="item">
            <li class='product-image'>
              <a href="index.php?page=detail&amp;id=<?php echo $item['product']['id'];?>">
                <img class="item__image" src="<?php echo 'assets/img/' . $item['product']['type'] . '/' . $item['product']['type'] . $item['product']['id'] . '.jpg'; ?>"  alt="<?php echo $item['product']['title'];?>" width="50" height="60"/>
              </a>
            </li>
            <li class='product-description'>
              <p class="product-description__title"><?php echo $item['product']['title'];?></p>
              <span class="product-description__subtitle"><?php echo $item['product']['type'] . ' - ' . $item['product']['subtitle'];?></span>
              <p class='product-description__price'><?php echo money_format('€ %!n', $item['product']['price']); ?></p>
            </li>
            <li class='product-quantity'><input class="text product-quantity__quantity" type="number" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /> </li>
            <li class='remove-item'><button type="submit" class="remove-from-cart" name="remove" value="<?php echo $item['product']['id'];?>"><img class="remove-from-cart__image" src="assets/img/remove.svg" alt="Remove" width="14" height="14"></button></li>
            <li class='product-total'><?php echo money_format('€ %!n', $itemTotal); ?></li>
          </ul>
          <?php
          }
          ?>
        <div class='total'>
          <p><button type="submit" id="update-cart" class="button-small button-update <?php if(empty($_SESSION['cart'])) {echo 'hidden';} ?>" name="action" value="update">Update Cart</button></p>
        </div>
    </form>
  </section>

  <section class="code">
    <h2 class="cart__title">Kortingscode</h2>
    <?php
      $total = $subtotal - $discount;

      //if(strlen($item['product']['type']) == 4 && $item['product']['id'] == 1 | $item['product']['id'] == 2 | $item['product']['id'] == 3 | $item['product']['id'] == 4 | $item['product']['id'] == 5 | $item['product']['id'] == 6 | $item['product']['id'] == 7 | $item['product']['id'] == 8 | $item['product']['id'] == 9 | $item['product']['id'] == 10):
      //  if(!empty($item['product']['korting'])) {
      //    echo money_format('€ %!n', $item['product']['price']);
      //  } else {
      //    echo money_format('€ %!n', $item['product']['price'] * $item['quantity']);
      //  }
      //  endif;
    ?>
    <form method="post" action="index.php?page=cart" id="cartform">
      <input class="code__input" type="text" name="korting[<?php echo $item['product']['id']; ?>]" id="<?php echo $item['product']['id']; ?>">
      <button class="button code__button" type="submit" name="action" action="index.php?page=cart" value="addKorting" id="addKorting<?php echo $item['product']['id']; ?>">toevoegen</button>
    </form>



  </section>

  <section class="cart-total">
    <h2 class="cart__title">Totaalprijs</h2>
    <ul class="cart-total__items">
      <li class="cart-total__item">
        <p class="cart-total__text">Subtotaal</p>
        <p class='cart-total__text'><?php echo money_format('€ %!n', $subtotal); ?></p>
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
    <form action="index.php?page=information" method="post" id="cartform-button">
      <p><button class="button cart-button <?php if(empty($_SESSION['cart'])) { display:hidden; } ?>" type="submit" id="checkout" name="action" value="checkout">Jouw gegevens</button></p>
    </form>
  </section>
</div>
