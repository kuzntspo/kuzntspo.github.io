
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
                <h1 class="name-fb">???????????????? ??????????</h1>
                <div class="elements-fb">
                    <p>??????: <input type="text" name="name-input"placeholder="?????????????? ??????" size="40" value="<?php if (isset($_GET['name-input'])){
                        echo $_GET['name-input']; }?>"/></p>
                    <p>Email: <input type="email" name="email-input"placeholder="?????????????? email" size="30" value="<?php if (isset($_GET['email-input'])){
                        echo $_GET['email-input']; }?>"/></p>
                    <div class="from-where">
                        <p>???????????? ???????????? ?? ??????? </p>
                        <p><input type="radio" name="type-input" value="1" <?php if (isset($_GET['type-input']) & $_GET['type-input']='1'){
                        echo 'checked';}?>/>?????????????? ???? ??????????????????</p>
                        <p><input type="radio" name="type-input" value="1" <?php if (isset($_GET['type-input']) & $_GET['type-input']='1'){
                        echo 'checked';}?>/>???????????????????? ????????????</p>
                    </div>
                    <p>?????? ??????????????????: 
                    <select size="1" name="letter-type" id="letter-type">
                        <option value="1">??????????????????????</option>
                        <option value="2">????????????</option>                        
                    </select></p>
                    <div class="appeal-text">
                        <p>?????????? ?????????????????? </p>
                        <textarea name="tell-us-message" placeholder="?????????????? ??????????" rows="5" wrap="soft"></textarea>
                    </div>
                    <p>????????????????: <input type="file" name="file-input" multiple></p>
                    <p>?????? ???????????????? ???? ?????????????????? ???????????????????????? ???????????? <input type="checkbox"></p>
                    <p><div class="buttons"><input type="reset"><input type="submit"></div></p>
                </div>
            </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="down-line">
            <div class="bottom-items">
                <a class="my-name">?????????????????? ????????????</a>
                <a class="text-phone">??????????????:</a>
                <a class="number-phone" href="#">+7(985)185-90-66</a>
                <a class = "foot-date" href="#"><?php require "date.php" ?></a>
            </div>
        </div>
    </footer>  
  </footer>
</body>