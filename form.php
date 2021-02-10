<?php

include 'products.php';

if(isset($_GET['id'])) $product = $products[$_GET['id']];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Страница покупки товара</title>
  <link rel="stylesheet" href="s.css">
</head>
<body>
<header class="menu">
    <div class="container">
      <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/about.php">о Нас</a></li>
      </ul>
    </div>
  </header>

  <div class="container">
    <h1>КорЗина</h1>
    <p class="success">Осталось чуть-чуть</p>
    <p class="error">Заполните Ваше Ф.И.О.</p>
    <div class="wrap-buy">
      <div class="items">
      <figure>
          <p><img src="<?=$product['img'];?>" alt="<?=$product['name'];?>"></p>
          <figcaption><?=$product['name'];?></figcaption>
        </figure>   
      </div>
      <form action="">
        <label for="">
          Ф.И.О:
          <input type="text" name="" id="" placeholder="Введите Ваше Ф.И.О.">
        </label>
        <input type="submit" class="btn" value="КУПИТЬ">
      </form>
    </div>
  </div>
</body>
</html>