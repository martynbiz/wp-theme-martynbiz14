<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Martynbiz
 */
?>

</div><!-- end wrapper -->
</div><!-- end data-role=content -->
</div><!-- end data-role=page -->

<script type="text/javascript">

/*function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "http://staticfiles.rtyn.biz/martynbiz/js/application.js.php";
	document.body.appendChild(element);
}

if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
else
	window.onload = downloadJSAtOnload;*/

</script>

<?php do_action('the_google_analytics_snippet'); ?>

<?php wp_footer(); ?>

</body>
</html>