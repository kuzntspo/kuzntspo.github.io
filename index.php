<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="shortcut icon" href="./img/choc1.jpg" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
  <?php require "name.php";?>
</head>

<body>
  <header class="header" id="top">
    <div class="wrapper">
      <div class="header__wrapper">
        <div class="logo">health&choco</div>
        <nav class="nav">
          <ul class="menu">
            <li class="menu__item"><a href="">Главная</a></li>
            <li class="menu__item"><a>О пользе шоколада</a></li>
            <li class="menu__item"><a>Состав полезного шоколада</a></li>
            <li class="menu__item" ><a href ="feedback.php"></li>Обратная связь</a></li>
            <li class="menu__item" ><a href ="logIn.php"></li>Авторизация</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <section class="preview">
      <div class="wrapper">
        <div class="preview__wrapper">
          <div class="preview__image">
            <?php 
                $s = date('s');
                $os = $s % 2;
                if ($os === 0)
                $name = 'chock2.jpg';
                else
                $name = 'chock3.jpg';
                echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 500px>';
                ?>
                
            <div class = "list">
            <?php require "list.php"?>
            </div>

            <div class = "table_db">
              <table>
              <?php require "table.php"; ?>
               </table>
          </div>
  </section>
</main>

  <footer class="footer" id="footer">
    <div class="wrapper">
      <div class="footer__wrapper">
        <div class="footer-info">
          <ul>
            <li class="footer-info__item">Кузнецова Полина Сергеевна</li>
            <li class="footer-info__item">
              Московский Политехнический Университет
            </li>
            <li class="footer-info__item">
              + 7 (985) 195-90-66
            </li>
            <li class = "foot-date" href="#"><?php require "date.php" ?></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>