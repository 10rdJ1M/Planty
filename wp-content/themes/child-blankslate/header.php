<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap');
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <div  id=logo> <a href="http://localhost/planty/" aria-current="page"><img class=logo_planty src='/planty/wp-content/uploads/2024/11/logo_planty-300x51.png' alt='logo'></a>
        </div>
        <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php $nav_menu=wp_nav_menu( array( 'theme_location' => 'main-menu','link_before' => '<span class=text-menu itemprop="name">', 'link_after' => '</span>' ) );?>

        </nav>
    </header>
<div id="container">
<main id="content" role="main">