<?php

include 'products.php';
include 'order.php';

$product = $products[$_REQUEST['id'] ?? 0];
$success = false;
$error = false;

if(!empty($_POST)) {
  if(empty($_POST['name']) || strlen($_POST['id']) <= 0) {
    $error = true;
  } else {
    $success = makeOrder($product, $_POST['name']);
  }
}

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
    <?php if($success) {?>
      <p class="success">Ваш заказ оформлен</p>
    <?php } else { ?>
      <?php if($error) {?>
        <p class="error">Заполните Ваше Ф.И.О.</p>
      <?php }?>
      <div class="wrap-buy">
        <div class="items">
        <figure>
            <p><img src="<?=$product['img'];?>" alt="<?=$product['name'];?>"></p>
            <figcaption><?=$product['name'];?></figcaption>
          </figure>   
        </div>
        <form action="/form.php" method="post">
          <input type="hidden" name="id" value="<?=$product['id'];?>">
          <label for="">
            Ф.И.О*:
            <input type="text" name="name" placeholder="Введите Ваше Ф.И.О.">
          </label>
          <input type="submit" class="btn" value="КУПИТЬ">
        </form>
      </div>
    <?php }?>
  </div>
</body>
</html>