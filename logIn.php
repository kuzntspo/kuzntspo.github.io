<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="logIn_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php require "name.php";?>
</head>
<body>
    
    <header>
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <a data-content="Homepage" class="my-page" href="index.php">Homepage</a>
                        <a data-content="Контакты" href="#">Contacts</a>
                        <a data-content="Log in" href="logIn.php">Log in</a>
                        <a data-content="Feedback" href="feedback.php">Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="background-login">
            <div class="container-login-form">
            <form class="login_form" method="post" name="login_form">
                <h1>Log in</h1>
                <div class="elements-login">
                    <p>Login: <input type="text" name="log-name"placeholder="Enter login" size="18"/></p>
                    <p>Password: <input type="password" name="pass-name"placeholder="Enter password" size="18"/></p>
                    <p>Remember me <input type="checkbox"/></p>
                    <p>
                        <div class="send-button">
                           <button type="reset">Send</button>
                        </div>
                    </p>
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
</body>