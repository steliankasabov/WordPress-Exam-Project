<!DOCTYPE HTML> 
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Colorlib" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900|Montserrat:400,700|PT+Serif' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='<?php echo get_template_directory_uri(); ?>/css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='<?php echo get_template_directory_uri(); ?>/css/common.css' />
        <link rel="stylesheet" type="text/css"  href='<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='<?php echo get_template_directory_uri(); ?>/css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css' />
        <link rel="stylesheet" type="text/css"  href='<?php echo get_template_directory_uri(); ?>/css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='<?php echo get_template_directory_uri(); ?>/style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- Preloader Gif -->
        <table class="doc-loader">
            <tr>
                <td>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ajax-document-loader.gif" alt="Loading..." />
                </td>
            </tr>
        </table>

        <!-- Menu -->
        <div class="menu-wrapper center-relative">
            <nav id="header-main-menu">
                <div class="mob-menu">MENU</div>
                <?php
                wp_nav_menu( array(
                    'menu' => 'Main Menu', // Specify the name of the menu
                    'container' => 'ul', // Defines the container element, though 'ul' is not a valid value for 'container'
                    'menu_class' => 'main-menu sm sm-clean', // CSS class for the menu
                ) );
                ?>
                </ul>
            </nav>
        </div>