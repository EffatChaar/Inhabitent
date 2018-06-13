<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>
</div><!-- site-content -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer"> <!-- #footer class -->
		<div class="contact-info">
			<h3>CONTACT INFO</h3>
			<p><i class="fa fa-envelope"></i>
				<a href="#">info@inhabitent.com</a>
			</p>
			<p><i class="fa fa-phone"></i>778-456-7891</p>
			<p>
				<i class="fa fa-facebook-square"></i>
				<i class="fa fa-twitter-square"></i>
				<i class="fa fa-google-plus-square"></i>
			</p>
		</div>
		<div class="business-hours">
			<h3>BUSINESS HOURS</h3>
			<p>Monday-Friday: 9am to 5pm</p>
			<p>Saturday: 10am to 12pm</p>
			<p>Sunday: Closed</p>
		</div>
		<div class="footer-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg">
		</div>
	</div> <!-- End of footer -->
	<div class="copyright">
		<p>COPYRIGHT &copy; 2017 INHABITENT</p>				
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
