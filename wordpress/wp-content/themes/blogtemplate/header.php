<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
    	<div id="page" class="site">
            <?php if (! is_front_page()) { ?>
    		<header class="site-header">
                <div class="row header-bar">
                    <div class="title-col">
                        <a class="title" href="/"><?php echo get_bloginfo(); ?></a>
                    </div>
                    <div class="menu-col">
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu') );?>
                    </div>
                </div>
            </header>
            <?php }?>