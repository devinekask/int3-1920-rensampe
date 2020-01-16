<section class="cart">
<form action="index.php?page=cart" method="post" id="cartform">
      <table class='cart'>
        <thead>
          <tr>
            <th class='product-description' colspan='2'></th>
            <th class='price'>Price</th>
            <th class='quantity'>Quantity</th>
            <th class='remove-item'></th>
            <th class='total'>Total</th>
          </tr>
        </thead>

        <tbody>

          <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            echo $item['price'];

            $itemTotal = $item['product']['price'] * $item['quantity'];
            echo $itemTotal;
            $total += $itemTotal;
          ?>
          <tr class="item">
            <td class='product-image'>
              <a href="index.php?page=detail&amp;id=<?php echo $item['product']['id'];?>">
                <img src="<?php echo $item['product']['image'];?>"  alt="<?php echo $item['product']['title']; ?>" width="25" height="30"/>
              </a>
            </td>
            <td class='product-description'>
              <?php echo $item['product']['title'];?>
            </td>
            <td class='price'><?php echo $item['product']['price'];?></td>
            <td class='quantity'> <input class="text quantity" type="text" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /> </td>
            <td class='remove-item'><button type="submit" class="btn remove-from-cart" name="remove" value="<?php echo $item['product']['id'];?>">Remove</button></td>
            <td class='total'><?php echo $itemTotal;?></td>
          </tr>
          <?php
          }
          ?>


        </tbody>
        </table>
        <div class='column two'>
          <p class='order-total'><span>total:</span> <?php echo $total;?></p>
          <p><button type="submit" id="update-cart" class="btn" name="action" value="update">Update Cart</button></p>

          <p><button class="btn-reversed btn" type="submit" id="checkout" name="action" value="checkout">Checkout</button></p>

        </div>
    </form>
</section>
