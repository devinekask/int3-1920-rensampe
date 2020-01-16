<section class="webshop">
  <h2 class="title">
    <?php
      if(!empty($_GET['term'])) {
        echo $_GET['term'];
      } else if(empty($_GET['filter'])){
        echo 'Alle producten';
      }

      if(!empty($_GET['filter']) && $_GET['filter'] === 'all') {
        echo 'Alle producten';
      } else if(!empty($_GET['filter']) && $_GET['filter'] === 'boek') {
        echo 'Boeken';
      } else if(!empty($_GET['filter']) && $_GET['filter'] === 'vergrootglas') {
        echo 'Vergrootglazen';
      } else if(!empty($_GET['filter']) && $_GET['filter'] === 'e-book') {
        echo 'E-books';
      } else if(!empty($_GET['filter']) && $_GET['filter'] === 'abonnement') {
        echo 'Abonnementen';
      } else if(!empty($_GET['filter']) && $_GET['filter'] === 'leeslamp') {
        echo 'Leeslampen';
      } else if(!empty($_GET['filter']) && $_GET['filter'] === 'andere') {
        echo 'Andere';
      }
    ?>
  </h2>
  <form class="search" action="index.php" method="GET">
    <input class="search__field" type="search" name="term" value="<?php if(!empty($_GET['term'])) {echo $_GET['term'];} ?>">
    <button class="search__submit" type="submit">
      <img class="searc__submit-image" src="assets/img/search.svg" alt="Search button" width="17px" height="17px">
    </button>
  </form>
  <form class="filter" id="filter" method="GET" action="index.php">
    <label class="filter__item filter__link
      <?php
            if(empty($_GET['filter'])){
                  echo ' filter__link-selected';
            }
            if(!empty($_GET['filter'])){
              if($_GET['filter'] === 'all'){
                echo ' filter__link-selected';
              }
            }
      ?>
    ">Alle producten
    <input class="form-submit" type="radio" name="filter" value="all">
    </label>
    <label class="filter__item filter__link
      <?php
            if(!empty($_GET['filter'])){
                if($_GET['filter'] === 'boek'){
                  echo ' filter__link-selected';
                }
            }
      ?>
    ">Boeken
    <input class="form-submit" type="radio" name="filter" value="boek">
    </label>
    <label class="filter__item filter__link
      <?php
            if(!empty($_GET['filter'])){
                if($_GET['filter'] === 'vergrootglas'){
                  echo ' filter__link-selected';
                }
            }
      ?>
    ">Vergrootglazen
      <input class="form-submit" type="radio" name="filter" value="vergrootglas">
    </label>
    <label class="filter__item filter__link
      <?php
            if(!empty($_GET['filter'])){
                if($_GET['filter'] === 'e-book'){
                  echo ' filter__link-selected';
                }
            }
      ?>
    ">E-books
      <input class="form-submit" type="radio" name="filter" value="e-book">
    </label>
    <label class="filter__item filter__link
      <?php
            if(!empty($_GET['filter'])){
                if($_GET['filter'] === 'abonnement'){
                  echo ' filter__link-selected';
                }
            }
      ?>
    ">Abonnementen
      <input class="form-submit" type="radio" name="filter" value="abonnement">
    </label>
    <label class="filter__item filter__link
      <?php
            if(!empty($_GET['filter'])){
                if($_GET['filter'] === 'leeslamp'){
                  echo ' filter__link-selected';
                }
            }
      ?>
    ">Leeslampen
      <input class="form-submit" type="radio" name="filter" value="leeslamp">
    </label>
    <label class="filter__item filter__link
      <?php
            if(!empty($_GET['filter'])){
                if($_GET['filter'] === 'andere'){
                  echo ' filter__link-selected';
                }
            }
      ?>
    ">Andere
      <input class="form-submit" type="radio" name="filter" value="andere">
    </label>
    <input type="submit" value="filter" class="button-small button-filter form-submit">
  </form>
  <ul class="products">
    <?php foreach($products as $product): ?>
      <li class="product">
        <a class="info" href="index.php?page=detail&amp;id=<?php echo $product['id'];?>">
          <img src="<?php echo 'assets/img/' . $product['type'] . '/' . $product['type'] . $product['id'] . '.jpg'; ?>" alt="<?php echo $product['title'];?>" width="250" height="300">
          <div class="info__wrapper">
            <h3 class="subtitle"><?php echo mb_strimwidth($product['title'], 0, 24, "...");?></h3>
            <p class="price"><?php echo $product['price'];?></p>
            <p class="type"><?php echo $product['type'];?> - <?php echo $product['subtitle'];?></p>
          </div>
        </a>
    </li>
    <?php endforeach; ?>
  </ul>
</section>

