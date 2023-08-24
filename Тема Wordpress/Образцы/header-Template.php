<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title();?></title>

	<meta name="image" content="<?php bloginfo('template_url');?>/assetZ/img/base.png">

	<?php wp_head();?>
	<!-- <link rel="stylesheet" href="/assetZ/css/normalize.css">
	<link rel="stylesheet" href="/assetZ/css/variables.css">
	<link rel="stylesheet" href="/assetZ/css/slick.css">
	<link rel="stylesheet" href="/assetZ/css/animate.css">
	<link rel="stylesheet" href="/assetZ/css/fancy.css">
	<link rel="stylesheet" href="/assetZ/css/main.css">
	<link rel="stylesheet" href="/assetZ/css/media.css"> -->
</head>
<body>
	
	<header class="header">
		<nav class="menu">
			<?php the_custom_logo();?>
			<!-- Эта функция вот такую конструкцию выводит с этим классом у ссылки
			<a href="" class="custom-logo-link">
				<img src="" alt="logo">
			</a>  -->
		</nav>

 		<?php // Для вывода меню
            wp_nav_menu(
                array(
                    'theme_location' => 'id', // id берется из functions.php
                    'container' => 'ul', 
                    'menu_class' => 'menu__list',
                )
            );
        ?>

		<a href="mailto:<?php the_field('mail');?>" class="menu-contacts__link">
			<?php the_field('mail');?>
		</a>

		<?php echo $redux_awesome['id'];?>
	</header>

	


<!-- Шаблоны -->


<?php language_attributes();?> 
<!-- функция для языка html --> <br>

<?php bloginfo('charset');?>
<!-- функция для кодировки --> <br>

<?php bloginfo('template_url');?>
<!-- функция для прописывания пути в корневую папку темы в вордпресе--> <br>

<?php wp_head();?>
<!-- это хук который пишется вместо стилей, фавиконок и скриптов если они нужны именно в начале страницы и мы к нему цепляемся и в fuctions.php уже пишем события где мы подгружаем стили --> <br>

<?php the_custom_logo();?>
<!-- эта функция выводит логотип и дает возможность менять его на странице --> <br>

<?php the_field('id');?>
<!-- Эта функция нужна для вывода полей ACField --> <br>

<?php global $redux;?>
<!-- Эта переменная нужна чтобы работал Redux, пишем это в каждй странице где меняем контент --> <br>

<?php echo $redux['id'];?>
<!-- Эта функция нужна для вывода полей Redux --> <br>

<img src="<?php echo $redux_blago['id']['url']; ?>" alt="header-picture"> <br>
<!-- Вот так выводятся картинки в Редуксе -->

<!-- Шаблоны -->
