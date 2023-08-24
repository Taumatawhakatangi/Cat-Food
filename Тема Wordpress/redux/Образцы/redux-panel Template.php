<?php

// Код для создания главных разделов
Redux::set_section( 
	$opt_name,
	array(
		'title'            => esc_html__( 'Название_вкладки_например_Главная_страница"', 'your-textdomain-here' ),
		'id'               => 'home-chapter',
	)
);

// Код для подключения и создания подразделов, которые будут внутри разделов выше
require get_template_directory() . '/redux/fields/homepage/offer-edit.php';
require get_template_directory() . '/redux/fields/homepage/contacts-edit.php';







































?>
