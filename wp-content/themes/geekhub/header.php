<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title><?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>
    <meta name="description" content="GeekHub надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення">
    <meta name="keywords" content="GeekHub, ГікХаб, Черкаси, Cherkassy">

   <link href="<?php bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet" /> 
   <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>
	<?php wp_head(); ?>
</head>
<body class="inner">
<div id="wrap">
<div id="header">
		<h1><a href="/"><?php bloginfo('name'); ?></a></h1>
        <ul class="nav">
            <?php wp_nav_menu(array(
                'theme_location'  => 'main_menu',
                'menu_class'      => 'header-navigation',
                'container'       => false
            )); ?>
        </ul>

        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>

	</div>