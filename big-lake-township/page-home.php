<?php
/*
Template Name: Home Page
 */

get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<div class="jumbotron align-items-center text-center" style=" background-attachment: fixed; background-size: cover; background-image: url('<?php echo $image[0]; ?>');">
<?php endif; ?>
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-lg-12 main-heading-hero">
          <h1 class="p-3 display-3  text-light">BIG LAKE TOWNSHIP</h1>
          <p class="text-white"> Lorum Ipsom </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 style">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
        <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="entry-content-page">
                <?php the_content(); ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
        </div>
        <div class="col-md-3 text-center">
        <?php get_sidebar();?>
          </div>
      </div>
    </div>
  </div>
  
  
<?php
get_footer();
