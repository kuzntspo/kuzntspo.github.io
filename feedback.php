
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="feedback_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="shortcut icon" href="./img/choc1.jpg" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>
<body>
<header>
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <a data-content="Home" href="<?php 
                            $name='Home'; 
                            $link='index.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <a data-content="Contacts" href="#go-to-footer">Contacts</a>
                        <a data-content="Log in" href="<?php 
                            $name='Log in'; 
                            $link='login.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                         <a data-content="Feedback" href="<?php 
                            $name='feedback'; 
                            $link='feedback.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="background-login">
            <div class="container-fb-form">
            <form class="feedback_form"  action="home.php" method="post" name="feedback_form">
                <h1 class="name-fb">Обратная связь</h1>
                <div class="elements-fb">
                    <p>ФИО: <input type="text" name="name-input"placeholder="Введите ФИО" size="40" value="<?php if (isset($_GET['name-input'])){
                        echo $_GET['name-input']; }?>"/></p>
                    <p>Email: <input type="email" name="email-input"placeholder="Введите email" size="30" value="<?php if (isset($_GET['email-input'])){
                        echo $_GET['email-input']; }?>"/></p>
                    <div class="from-where">
                        <p>Откуда узнали о нас? </p>
                        <p><input type="radio" name="type-input" value="1" <?php if (isset($_GET['type-input']) & $_GET['type-input']='1'){
                        echo 'checked';}?>/>Реклама из интернета</p>
                        <p><input type="radio" name="type-input" value="1" <?php if (isset($_GET['type-input']) & $_GET['type-input']='1'){
                        echo 'checked';}?>/>Рассказали друзья</p>
                    </div>
                    <p>Тип обращения: 
                    <select size="1" name="letter-type" id="letter-type">
                        <option value="1">Предложение</option>
                        <option value="2">Жалоба</option>                        
                    </select></p>
                    <div class="appeal-text">
                        <p>Текст сообщения </p>
                        <textarea name="tell-us-message" placeholder="Введите текст" rows="5" wrap="soft"></textarea>
                    </div>
                    <p>Вложения: <input type="file" name="file-input" multiple></p>
                    <p>Даю согласие на обработку персональных данных <input type="checkbox"></p>
                    <p><div class="buttons"><input type="reset"><input type="submit"></div></p>
                </div>
            </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="down-line">
            <div class="bottom-items">
                <a class="my-name">Кузнецова Полина</a>
                <a class="text-phone">Телефон:</a>
                <a class="number-phone" href="#">+7(985)185-90-66</a>
                <a class = "foot-date" href="#"><?php require "date.php" ?></a>
            </div>
        </div>
    </footer>  
  </footer>
</body>