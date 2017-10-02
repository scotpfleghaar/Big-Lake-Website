<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Lake_Township
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="index.css" type="text/css">
	<title>Township of Big Lake</title>
	<link rel="icon" href="images/Untitled.png"> </head>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'big-lake-township' ); ?></a>

<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo $image[0]; ?>" class="" style="height: 60px;"> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class='col-md-9'>

	  		<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'navbar-nav mr-auto'
				) );
			?>
      </div>
      <div class='col-md-3'>

        <form class="form-inline">
          <input class="form-control mr-2" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" type="text" name="s" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>">
          <button class="btn search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" type="submit">Search</button>
        </form>
        </div>
      </div>
      
    </div>
  </nav>
