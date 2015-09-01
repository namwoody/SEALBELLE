<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
 
 
     <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/portfolio-item.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hover-min.css">


  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

 
<!-- bxSlider CSS file -->
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />
 
 
 
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class(); ?>>
 
 <!-- Page Content -->
    <div class="container" id="container">
 
    <!-- navigation -->
    <div class="row">
 <div class="col-md-4">
    <div id="logo">
    <a href="http://seabellebeautysalon.com/">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="seabellebeautylogo" ></a>
        </div>
    </div>


     <div class="col-md-8 pull-right" id="navigation">
         <nav id="upper-navigation">
         <ul>
             <li><a href="http://seabellebeautysalon.com/" class="hvr-back-pulse">Home</a></li>
             <li><a href="about" class="hvr-back-pulse" >About us</a></li>
             <li><a href="service" class="hvr-back-pulse" >Services</a></li>
             <li><a href="contact" class="hvr-back-pulse">Contact/Location</a></li>
         </ul>
         </nav>
     </div>
    </div>

    <!-- end navigation -->     



