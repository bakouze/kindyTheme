<!doctype html>

<html class="no-js"  <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">

  <meta name="description" content="Site internet de Kindy School École maternelle privée de Nouméa en Nouvelle Calédonie pour des enfants de 2 à 6 ans">
  <meta name="keywords" content="école, maternelle, preschool, privé, private, nouméa, Kindy, School, kindyschool, nouvelle-calédonie, new caledonia, différent, à partir de deux ans, anglais, english, enfants, children, vacances, holidays, stage, éducation">
  <meta name="author" content="Guillaume Boulanger, Adèle Charriaud, Bertrand Charriaud">

  <!-- Force IE to use the latest rendering engine available -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta class="foundation-mq">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!-- If Site Icon isn't set in customizer -->
  <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
    <!-- Icons & Favicons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
    <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

    <script src="https://use.fontawesome.com/8d808b035a.js"></script>

    <!-- Drop Google Analytics here -->
    <!-- end analytics -->

  </head>

  <!-- Uncomment this line if using the Off-Canvas Menu -->

  <body <?php body_class(); ?>>

    <div class="off-canvas-wrapper">

      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <?php get_template_part( 'parts/content', 'offcanvas' ); ?>

        <div class="off-canvas-content" data-off-canvas-content>

          <div data-sticky-container>
            <header class="header" data-sticky data-options="marginTop:0;"  role="banner">

              <!-- This navs will be applied to the topbar, above all content
              To see additional nav styles, visit the /parts directory -->
              <div class="row align-middle head">
                <div class="small-12 large-4 columns text-center">
                  <a href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/kindy.png" alt="Kindy School" />
                    <h3 class="hideScroll">École Maternelle <small>à partir de deux ans - Nouméa</small></h3>
                  </a>
                </div>
                <div class="small-12 large-8 columns topbar-container">
                  <?php get_template_part( 'parts/nav', 'topbar' ); ?>
                </div>
              </div>


            </header> <!-- end .header -->
          </div>
