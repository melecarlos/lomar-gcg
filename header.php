<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>    
<header class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-center">
                    <a href="<?php get_home_url()?>">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/logo.png"/>
                    </a>
                </div>
                
            </div>
            <div class="col-lg-8">
                    <div class="text-right">
                        <div class="header-contact">
                            <span>
                                Manassas, VA, United States
                                <i class="fas fa-map-pin"></i>
                            </span>
                            <span>
                                Monday - Friday: 08:00 - 18:00
                                <i class="fas fa-clock"></i>
                            </span>
                            <span>
                                (+571) 288 3130
                                <i class="fas fa-phone"></i>
                            </span>
                            <span>
                                contact@lomar-gcg.com
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <a href="#" class="mt-4 btn btn-primary btn-lg" onclick="message.quote()">Request an Appointment or Consultation</a>
                    </div>
                </div>
        </div>
    </div>
</header>

<div class="navigation py-4">
    <?php 
        $args = array(
            'theme_location' => 'menu_principal', 
            'container' => 'div',
            'container_class' => 'container'
        );
        wp_nav_menu($args);
    ?>
</div>