
<h1><? echo $title ;?></h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Great news</title>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Style-client.css">
</head>
<body>
<?php
?>
<div class="top-nav">

    <div class="section-inner">

        <ul class="secondary-menu">

            <li id="menu-item-5"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149">
                <a href="http://localhost/testNews/">Главная</a></li>
            <li id="menu-item-149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149"><a
                    href="http://localhost/testNews/about">О себе</a></li>
            <li id="menu-item-120"
                class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-120"><a
                    href="http://localhost/testNews/news">Новости</a>
            </li>
            <?php
            if (isset($userInf)){
                 echo "<li id='menu-item-152' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-152'>
                <a href='http://localhost/testNews/users/mypage'>Личный кабинет({$userInf['username']})</a></li>";
            }else {

                echo "<li id='menu-item-152' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-152'>
                <a class='login-toggle'>Вход/Регистрация</a></li>";
            }
              ?>



        </ul> <!-- /secondary-menu -->

        <ul class="social-menu">

            <li id="menu-item-162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-162"><a
                    href="http://www.facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
            <li id="menu-item-163" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-163"><a
                    href="http://www.twitter.com/"><span class="screen-reader-text">Twitter</span></a></li>
            <li id="menu-item-164" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-164"><a
                    href="http://plus.google.com"><span class="screen-reader-text">Google+</span></a></li>
            <li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-151"><a
                    class="search-toggle" href="#"><span class="screen-reader-text">Search</span></a></li>
        </ul> <!-- /social-menu -->

        <div class="clear"></div>

    </div> <!-- /section-inner -->

</div>
<?php

?>
<div class="login-container">
    <div class="section-inner">
        <button class="reg-button"><a href="http://localhost/testNews/login">Вход</a></button>
            <button class="reg-button"><a href="http://localhost/testNews/register">Зарегистрироваться</a></button>

    </div>
</div>


<div class="header-wrapper">
    <div class="header">

        <div class="section-inner">


            <h2 class="blog-title">
                <a href="http://localhost/testNews/" "
                   rel="home">Isakjanov R.</a>
            </h2>


            <h4 class="blog-description">
                Выполнил тестовое задание. </h4>


            <div class="nav-toggle">

                <div class="bars">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

            </div> <!-- /nav-toggle -->

        </div> <!-- /section-inner -->

    </div> <!-- /header -->


    <ul class="mobile-menu">


        <li id="menu-item-5"
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5">
            <a href="/zip.re/index.php">Главная</a></li>
        <li id="menu-item-149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149"><a
                href="">О себе</a></li>
        <li id="menu-item-120"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-120"><a
                href="">Новости</a>
        </li>


    </ul> <!-- /mobile-menu -->

</div>




