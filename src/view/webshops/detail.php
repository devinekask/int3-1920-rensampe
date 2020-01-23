<section class="boek">
  <img class="boek__cover" src="<?php echo 'assets/img/' . $product['type'] . '/' . $product['type'] . $product['id'] . '.jpg'; ?>" alt="<?php echo $product['title'];?>" width="469" height="563">
  <div class="boek__info">
    <p class="boek__info-price"><?php echo money_format('€ %!n', $product['price']); ?></p>
    <h2 class="title boek__info-title"><?php echo $product['title'];?></h2>
    <p class="boek__info-subtitle"><?php echo $product['type'];?> - <?php echo $product['subtitle'];?></p>
    <div class="boek__info-description">
      <p class="boek__info-description__part"><?php echo $product['desc_1'];?></p>
      <p class="boek__info-description__part"><?php echo $product['desc_2'];?></p>
      <p class="boek__info-description__part"><?php echo $product['desc_3'];?></p>
    </div>
    <div class="boek__info-buttons">
      <form method="post" action="index.php?page=cart">
        <input name="product_id" type="hidden" value="<?php echo $product['id'];?>">
        <button class="button" type="submit" name="action" value="add">bestel</button>
      </form>
      <?php
        if(!empty($product['other_link'])) {
          echo '<a class="button button-link" href="' . $product['other_link'] . '">' . (($product['type'] === 'boek') ? 'e-book' : 'boek') . '</a>';
        }
      ?>
      </div>
  </div>
</section>

