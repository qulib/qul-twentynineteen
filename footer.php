<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
  <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>


  <div class="site-info">
    <a href="https://library.queensu.ca">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qul-logo-long.svg" width="465" height="69" alt="Queen's University Library Home"></a>
    <a href="https://queensu.ca">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qu-logo.svg" width="200" height="152" alt="Queen's University Home">
    </a>


  </div><!-- .site-info -->


</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>