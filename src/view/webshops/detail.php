<section class="boek">
  <img class="boek__cover" src="<?php echo 'assets/img/' . $product['type'] . '/' . $product['type'] . $product['id'] . '.jpg'; ?>" alt="<?php echo $product['title'];?>" width="469" height="563">
  <div class="boek__info">
    <p class="boek__info-price"><?php echo $product['price'];?></p>
    <h2 class="title boek__info-title"><?php echo $product['title'];?></h2>
    <p class="boek__info-subtitle"><?php echo $product['type'];?> - <?php echo $product['subtitle'];?></p>
    <div class="boek__info-description">
      <p class="boek__info-description__part"><?php echo $product['desc_1'];?></p>
      <p class="boek__info-description__part"><?php echo $product['desc_2'];?></p>
      <p class="boek__info-description__part"><?php echo $product['desc_3'];?></p>
    </div>
    <div class="boek__info-buttons">
      <form action="index.php?page=">
        <input type="hidden">
        <button class="button" type="submit" action="name">bestel</button>
      </form>
      <?php
        if(!empty($product['other_link'])) {
          echo '<a class="button button-link" href="' . $product['other_link'] . '">' . (($product['type'] === 'Boek') ? 'e-book' : 'boek') . '</a>';
        }
      ?>
      </div>
  </div>
</section>

