<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home_style.css">
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
                        <a data-content="Homepage" href="<?php 
                            $name='Homepage'; 
                            $link='index.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <a data-content="Контакты" href="#go-to-footer">Контакты</a>
                            if( $current_page ) 
                                echo $name;
                            ?>
                        </a>
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
                            $name='Feedback'; 
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
            <h1 class="name-fb">Обратная связь</h1>
            <div class="elements-fb">
                <?php
                echo '<p class="hello-fb"> Здравствуйте, '.$_POST['name-input'].'!</p>';
                if ($_POST['letter-type'] == '1') {
                    echo '<p>Спасибо за ваше предложение!</p>';
                    echo '<textarea>'.$_POST['tell-us-message'].'</textarea>';
                }else {
                    echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                    echo '<textarea>'.$_POST['tell-us-message'].'</textarea>';
                }
                if (isset($_POST['file-input']) & $_POST['file-input'] != '') {
                    echo '<p>Вы приложили следующий файл: '.$_POST['file-input'].'</p>';
                }
                else{
                    echo '<p>Вы не приложили ни одного файла.</p>';
                }
                echo '<p><a class="rewrite-fb" href="feedback.php?name-input='.$_POST['name-input'].'&email-input='.$_POST['email-input'].'"><i>Заполнить снова</i></a></p>';
                ?>
            </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="down-line">
            <div class="bottom-items">
            <ul>
            <li class="footer-info__item">Кузнецова Полина Сергеевна</li>
            <li class="footer-info__item">Московский Политехнический Университет</li>
            <li class="footer-info__item">+ 7 (985) 195-90-66</li>
            <li class = "foot-date" href="#"><?php require "date.php" ?></li>
          </ul>
        </div>
    </footer>  
</body>
</html>