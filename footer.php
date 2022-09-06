<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eqafit
 */

?>

<footer id="footer-sidebar" class="site-footer">
	<div id="footer-sidebar-1">
		<div class="content-footer">

			<?php
			if (is_active_sidebar('footer-sidebar-1')) {
				dynamic_sidebar('footer-sidebar-1');
			}
			?>
		</div>
	</div>
	<div class="footer-acknowledgement">

		<div class="content-footer">
			<div class="text-center mb-5 mt-5">
				<img src="<?php echo get_stylesheet_directory_uri() . "/images/logo-eqafit-footer.png" ?>" alt="logo-footer">
			</div>
			<hr class="mb-3 mt-3">

			<p>ACKNOWLEDGEMENT</p>
			<img src="<?php echo get_stylesheet_directory_uri() . "/images/european-union.png" ?>" alt="european-union">
			<p class="lh-1 mt-3">The project leading to this application has received funding from the European Union’s Horizon 2020 research and innovation programme under grant agreement No 824481.</p>

		</div>

	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
	var $ = window.jQuery;
	$(document).ready(function() {
		$(".target-group").click(targetGroupHasBeenClicked);
		$(".close").click(removeAllActiveElements);

		function targetGroupHasBeenClicked(e) {
			//if we are not inside the pop up, toggle
			if (!$(e.target).hasClass("target-group-impacts") && $(e.target).parents(".target-group-impacts").length == 0) {
				$(".target-group").not(this).removeClass("active");
				//alert($(this).parents(".target-group").length);
				$(this).toggleClass("active");
			}
		}

		function removeAllActiveElements() {
			$(".target-group").removeClass("active");
		}


	});
</script>

</body>

</html>