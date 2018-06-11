<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package occ
 */

?>

	<footer class="footer">
      <div class="footer-container">
        
        <p>OCC &copy; 2018. <a href="#">Contact </a> - <a href="#">1-8000-8522</a></p> 
      </div>
   </footer>

   <div id="contact-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <h2>Contact Us</h2>
         <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form"]'); ?>
              
        
    </div>

  

<?php wp_footer(); ?>

</body>
</html>
