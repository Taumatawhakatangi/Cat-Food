<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title();?></title>
    <!--
    берез иконку 300х300 png
    заливаем на сайте https://www.favicon-generator.org/
    получаем фавикон
    -->
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <!-- Snippets-->
    <meta name="description" content="Описание">
    <meta name="keywords" content="Ключевые слова">
    <meta name="author" content="Автор">
    <meta name="image" content="<?php bloginfo('template_url');?>/assets/img/base.png">
    <!-- OG Tags-->
    <meta property="og:title" content="Заголовок">
    <meta property="og:description" content="Описание">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://sitename.ru/img/meta">
    <meta property="og:site_name" content="Название сайта">
    <meta property="og:url" content="https://example.com">
    <link rel="canonical" href="https://example.com">
    <link rel="preconnect" href="//fonts.gstatic.com">
    <link rel="preconnect" href="//google-analytics.com">
    <!-- Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/assets/img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_url');?>/assets/img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/assets/img/icon/favicon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url');?>/assets/img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/assets/img/icon/favicon-16x16.png">
    <!-- <link rel="manifest" href="<?php bloginfo('template_url');?>/assets/img/icon/manifest.json">-->
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url');?>/assets/img/icon/ms-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#F1EADC">
    <meta name="apple-mobile-web-app-title" content="Название иконки на рабочем столе">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <!-- Пример подключения-->
    <!-- src="<?php bloginfo('template_url');?>/assets/img/test-small.jpg"-->
    <!-- Для теста шрифтов--><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@400;800&family=Montserrat:wght@200;300;400;500;600;700&family=Oswald:wght@400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- CSS-->
    <?php wp_head();?>
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/main.min.css"> -->
    <!-- CSS for IE-->
    <!-- условные коментарии-->
    <!--if IE 9-->
    <!--if IE 8-->
    <!--if IE 7-->
  </head>
  <body>   
    <div class="page">
      <header class="header" id="header">
        <div class="header__inner">
          <div class="header__container container">
            <nav class="menu"><?php the_custom_logo();?>
              <button class="burger" type="button"><span class="burger__top"></span><span class="burger__middle"></span><span class="burger__bottom"></span></button>
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'container' => 'ul', 
                            'menu_class' => 'menu__list',
                        )
                    );
                ?>
              <!-- <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="#">главная</a></li>
                <li class="menu__item"><a class="menu__link" href="#">каталог продукции</a></li>
                <li class="menu__item"><a class="menu__link" href="#">подбор программы</a></li>
              </ul> -->
            </nav>
          </div>
        </div>
        <div class="header__offer">
          <div class="container">
            <div class="offer"> 
              <div class="offer__info"> 
                <h1 class="offer__title">Функциональное питание для котов</h1><span class="offer__subtitle">Занялся собой? Займись котом!</span>
                <button class="offer__btn btn" type="button">подобрать программу</button>
              </div><a class="offer__img" href="<?php the_field('offer-image-href');?>"><img src="<?php the_field('offer-image');?>" alt="product"></a>
              <button class="offer__btn offer__btn_reverse btn" type="button">подобрать программу</button>
            </div>
          </div>
        </div>
      </header>

      