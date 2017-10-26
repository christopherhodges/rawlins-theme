<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php /* Load font <link>s here */ ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo bloginfo('name'); ?></title>

    <?php /*
    <!-- http://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo home_url(); ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo home_url(); ?>/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo home_url(); ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo home_url(); ?>/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo home_url(); ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo home_url(); ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo home_url(); ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo home_url(); ?>/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo home_url(); ?>/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo home_url(); ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo home_url(); ?>/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="<?php echo home_url(); ?>/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo home_url(); ?>/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo home_url(); ?>/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo home_url(); ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo home_url(); ?>/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    */ ?>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
