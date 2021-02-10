<?php

$products = [
  [
    'img' => 'img/corkscrew.jpg',
    'name' => 'Штопор безумный'
  ],
  [
    'img' => 'img/sneakers.jpg',
    'name' => 'Кеды-самоеды'
  ],
  [
    'img' => 'img/unicorn.jpg',
    'name' => 'Самка единорога'
  ],
]

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
        <li><a href="index.html">Главная</a></li>
        <li><a href="about.html">о Нас</a></li>
      </ul>
    </div>
  </header>

  <div class="container">
    <h1>Каталог</h1>
    <div class="items">
      <?php foreach($products as $product) { ?>
        <figure>
          <p><img src="<?=$product['img'];?>" alt="<?=$product['name'];?>"></p>
          <figcaption><?=$product['name'];?></figcaption>
          <a href="form.html" class="btn">Купить</a>
        </figure>
      <?php } ?>      
    </div>
  </div>
</body>

</html>