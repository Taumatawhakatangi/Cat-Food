<?php 

	add_action( 'wp_enqueue_scripts', function() {
		
		wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assetZ/css/main.css' );
		// Шаблон для стилей
		// wp_enqueue_style( '___-css', get_template_directory_uri() . '/assetZ/css/___.css' );
		


		// код ниже отключает и подключает jquery
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
		wp_enqueue_script( 'jquery' );
		
		// Шаблон для скриптов
		// wp_enqueue_script( '___-js', get_template_directory_uri() . '/assetZ/js/___.js', array('jquery'), 'null', true );

		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assetZ/js/main.js', array('jquery'), 'null'
	});


	// добавление меню во вкладке "внешний вид""
	add_action('after_setup_theme', 'navMenu' );
	function navMenu() {
		register_nav_menu('EditMenu', 'Основное меню');
	}


	



	// добавление возможности управлять и менять посты,
	add_theme_support('post-thumbnails'); 
	// для заголовков постов
	add_theme_support('title-tag '); 

	// Функция для вывода логотипа
	add_theme_support('custom-logo'); 











	
	// добавляем редукс в админ панель
	require get_template_directory() . '/includes/redux-panel.php'

?>