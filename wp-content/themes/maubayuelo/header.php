<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php wp_head(); ?> 
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title( ' | ', true, 'right' ); ?></title>
        
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/bootstrap/css/main.css">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" /> 
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="quote_mob hidden-lg hidden-md visible-sm visible-xs">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                    if(ICL_LANGUAGE_CODE=='en'){ ?>
                        <h5 class="text-center"><a href="<?php echo esc_url( home_url( '/quote' ) ); ?>">GET A FREE QUOTE</a></h5>
                    <?php }
                    if(ICL_LANGUAGE_CODE=='fr'){ ?>
                        <h5 class="text-center"><a href="<?php echo esc_url( home_url( '/fr/estime' ) ); ?>">OBTENEZ UN ESTIMÉ GRATUIT</a></h5>
                <?php } ?>
            </div>
        </div>
    </div>
    <header id="header" role="banner" class="main_header">
        <div class="container">
            <section class="row">
                <div class="col-lg-3 col-md-4 col-sm-9 col-xs-9">
                  <?php if ( ! is_singular() || is_singular()) { echo '<h1>'; } ?><a class="main_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() || is_singular()) { echo '</h1>'; } ?>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-3 col-xs-3 visible-lg visible-md hidden-sm hidden-xs">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
                <div class="hidden-lg hidden-md visible-sm visible-xs">
                    <?php
                    echo do_shortcode('[responsive-menu]');
                    ?>
                    <h6 class="text-right" style="margin:33px 20px 0 0;"><?php echo do_shortcode( '[wpml_custom_lang]' ); ?></h6>
                </div>
            </section>
        </div>
    </header>