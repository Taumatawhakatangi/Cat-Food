<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( '- Шапка сайта'),
		'id'               => 'offer-subsection',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'offer-img',
				'type'     => 'media',
				'url'	   => true,
				'title'    => esc_html__( 'Загрузить картинку в шапке сайта'),
			),
			array(
				'id'       => 'offer-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить заголовок', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'offer-subtitle',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить подзаголовок', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'offer-description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Изменить описание', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'offer-button',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить текст в кнопке', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'offer-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить адрес ссылки', 'your-textdomain-here' ),
			),
		),
	)
);
