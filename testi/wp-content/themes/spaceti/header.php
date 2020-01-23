<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/mmenu.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/demo.css" />
    <link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <title>SpaseX</title>
</head>

<body>
    <div class="mm-page mm-slideout">

        <header>
            <div class='wrapper'>
                <div class="head-wrap">

                    <a href='#' class='start'><span> <img src="<?php bloginfo('template_directory') ?>/img/spiceX.svg" alt="SpaseX"></span></a>
					<?php $argc = array(
						'container' => 'ul',
						'container_class' => 'ul-menu',
						'menu_class' => 'ul-menu'
					);
					wp_nav_menu( $argc ); ?>
					<!-- <ul class='ul-menu'>
                        <li><a href='#'>Главная</a></li>
                        <li><a href='#'>Технология</a></li>
                        <li><a href='#'>График полетов</a></li>
                        <li><a href='#'>Гарантии</a></li>
                        <li><a href='#'>О компании</a></li>
                        <li><a href='#'>Контакты</a></li>
                    </ul> -->
                </div>
            </div>
