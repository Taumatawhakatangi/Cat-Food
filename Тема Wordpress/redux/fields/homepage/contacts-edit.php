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
		'title'            => esc_html__( '- Контакты', 'your-textdomain-here' ),
		'id'               => 'contacts-subsection',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			// телефон
			array(
				'id'       => 'contacts-phone',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить номер телефона', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Номер телефона будет виден в "шапке" сайта и в подвале "сайта"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-phone-protocol',
				'type'     => 'text',
				'title'    => esc_html__( 'Введите номер телефона еще раз', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Продублируйте номер телефона в это поле. Вводите без пробелов, скобок и +. Вводите только цифры. Это нужно для корректной работы системы', 'your-textdomain-here' ),
			),
			// почта
			array(
				'id'       => 'contacts-mail',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить адрес почты', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Адрес почты будет виден в "шапке" сайта и в "подвале" сайта', 'your-textdomain-here' ),
			),
			// адресс организации
			array(
				'id'       => 'contacts-address',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить адрес организации', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Адрес организации будет виден в "подвале" сайта"', 'your-textdomain-here' ),
			),
			// ссылка на договор
			array(
				'id'       => 'contacts-treaty',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить текст: "договор оферты"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-treaty-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить ссылку для текста: "договор оферты"', 'your-textdomain-here' ),
			),
			// ссылка на соцсети
			// Телеграм
			array(
				'id'       => 'contacts-tg-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить ссылку "Телеграм"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-tg-disappear',
				'type'     => 'text',
				'title'    => esc_html__( 'Убрать или добавить соцсеть "Телеграм"', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Для того, чтобы иконка исчезла напишите слово "disappear" без ковычек', 'your-textdomain-here' ),
			),
			// Вотсап
			array(
				'id'       => 'contacts-ws-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить ссылку "WhatsUpp"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-ws-disappear',
				'type'     => 'text',
				'title'    => esc_html__( 'Убрать или добавить соцсеть "WhatsUpp"', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Для того, чтобы иконка исчезла напишите слово "disappear" без ковычек', 'your-textdomain-here' ),
			),
			// Инстаграм
			array(
				'id'       => 'contacts-inst-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить ссылку "Instagram"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-inst-disappear',
				'type'     => 'text',
				'title'    => esc_html__( 'Убрать или добавить соцсеть "Instagram"', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Для того, чтобы иконка исчезла напишите слово "disappear" без ковычек', 'your-textdomain-here' ),
			),
			// Фэйсбук
			array(
				'id'       => 'contacts-fb-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить ссылку "Facebook"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-fb-disappear',
				'type'     => 'text',
				'title'    => esc_html__( 'Убрать или добавить соцсеть "Facebook"', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Для того, чтобы иконка исчезла напишите слово "disappear" без ковычек', 'your-textdomain-here' ),
			),
			// Вконтакте
			array(
				'id'       => 'contacts-vk-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить ссылку "VKontakte"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-vk-disappear',
				'type'     => 'text',
				'title'    => esc_html__( 'Убрать или добавить соцсеть "VKontakte"', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Для того, чтобы иконка исчезла напишите слово "disappear" без ковычек', 'your-textdomain-here' ),
			),
			// Одноклассники
			array(
				'id'       => 'contacts-buddy-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Изменить ссылку "Одноклассники"', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'contacts-buddy-disappear',
				'type'     => 'text',
				'title'    => esc_html__( 'Убрать или добавить соцсеть "Одноклассники"', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Для того, чтобы иконка исчезла напишите слово "disappear" без ковычек', 'your-textdomain-here' ),
			),
		),
	)
);
