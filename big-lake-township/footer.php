<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Lake_Township
 */

?>
<div class="py-5 bg-secondary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center align-self-center">
          <h2 class="text-sm-center text-white">Contact Us</h2>
          <p class="my-1 text-center">Phone: 763-263-8111 Fax: 763-263-3660 Town Hall Address: 21960 County Rd. 5 • P.O. Box 75 Big Lake, MN 55309 </p>
          <br>
          <div class="my-3 row">
            <img class="img-fluid d-block bg-primary mx-auto img-thumbnail border border-primary" src="images/Mn-Township-Logo.gif"> </div>
          <br> </div>
        <div class="col-md-6 p-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44870.563063266694!2d-93.75168436773433!3d45.34053142991091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b363887b6d11c9%3A0x586828ff04c1e27f!2sBig+Lake+Township%2C+MN!5e0!3m2!1sen!2sus!4v1503943695160"
            width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>	

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'big-lake-township' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'big-lake-township' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'big-lake-township' ), 'big-lake-township', '<a href="http://underscores.me/">Scot Pfleghaar</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
  <script src="<?= get_bloginfo("template_url"); ?>/custom.js"></script>
</body>
</html>
