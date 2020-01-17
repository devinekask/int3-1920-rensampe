<section class="process">
  <ul class="steps">
    <li class="step"><a class="step__link step__link-selected" href="">winkelwagen</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="">jouw gegevens</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="">betaalwijze</a></li>
    <img src="assets/img/next.svg" alt="Next" width="10px" height="11px">
    <li class="step"><a class="step__link" href="">bevestiging</a></li>
  </ul>
</section>

<div class="cart__wrapper">
  <section class="cart">
    <h2 class="cart__title">winkelwagen</h2>
    <form action="index.php?page=cart" method="post" id="cartform">
          <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            if (is_numeric($item['quantity']) && is_numeric($item['product']['price'])) {
              //$itemTotal += ($item['quantity'] * $item['product']['price']);
            } else {
              // do some error handling...
            }
            //$total += $itemTotal;
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
              <p class='product-description__price'>22EUR<?php //echo money_format("%i", $item['product']['price']);?></p>
            </li>
            <li class='product-quantity'><input class="text product-quantity__quantity" type="number" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /> </li>
            <li class='remove-item'><button type="submit" class="remove-from-cart" name="remove" value="<?php echo $item['product']['id'];?>"><img src="assets/img/remove.svg" alt="Remove" width="14px" height="14px"></button></li>
            <li class='product-total'>22EUR<?php //echo money_format("%i", $itemTotal);?></li>
          </ul>
          <?php
          }
          ?>
        <div class='total'>
          <p class='order-total'><?php echo money_format("%i", $total);?></p>
          <p><button type="submit" id="update-cart" class="btn" name="action" value="update">Update Cart</button></p>
        </div>
        <p><button class="btn-reversed btn" type="submit" id="checkout" name="action" value="checkout">Checkout</button></p>
    </form>
  </section>

  <section class="code">
    <h2 class="cart__title">Kortingscode</h2>
    <input class="code__input" type="text">
    <button type="submit">toevoegen</button>
  </section>
</div>
