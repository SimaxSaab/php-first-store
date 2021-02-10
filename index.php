<?php

include 'products.php';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First simple store</title>
  <link rel="stylesheet" href="s.css">
</head>

<body>
  <header class="menu">
    <div class="container">
      <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="about.html">о Нас</a></li>
      </ul>
    </div>
  </header>

  <div class="container">
    <h1>Каталог</h1>
    <div class="items">
      <?php foreach($products as $id => $product) { ?>
        <figure>
          <p><img src="<?=$product['img'];?>" alt="<?=$product['name'];?>"></p>
          <figcaption><?=$product['name'];?></figcaption>
          <a href="form.php?id=<?=$id;?>" class="btn">Купить</a>
        </figure>
      <?php } ?>      
    </div>
  </div>
</body>

</html>