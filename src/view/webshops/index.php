<section class="webshop">
  <h2 class="title">Alle producten</h2>
  <form class="search" action="">
    <input type="text">
  </form>
  <ul class="filter" id="filter">
    <li class="filter__item"><a href="" class="filter__link filter__link-selected">Alle producten</a></li>
    <li class="filter__item"><a href="" class="filter__link">Boeken</a></li>
    <li class="filter__item"><a href="" class="filter__link">Vergrootglazen</a></li>
    <li class="filter__item"><a href="" class="filter__link">E-books</a></li>
    <li class="filter__item"><a href="" class="filter__link">Abonnementen</a></li>
    <li class="filter__item"><a href="" class="filter__link">Leeslampen</a></li>
    <li class="filter__item"><a href="" class="filter__link">Andere</a></li>
  </ul>
  <div class="products">
    <?php foreach($products as $product): ?>
      <article class="product">
        <a class="info" href="index.php?page=detail&amp;id=<?php echo $product['id'];?>">
          <img src="<?php echo $product['image'];?>" alt="" width="250" height="300">
          <div class="info__wrapper">
            <h3 class="subtitle"><?php echo mb_strimwidth($product['title'], 0, 24, "...");?></h3>
            <p class="price"><?php echo $product['price'];?></p>
            <p class="type"><?php echo $product['type'];?> - <?php echo $product['subtitle'];?></p>
          </div>
        </a>
      </article>
    <?php endforeach; ?>
  </div>
</section>

