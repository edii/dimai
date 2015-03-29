<?php if ( !defined( 'ABSPATH' ) ) exit;
/*

	Post formats compatible.

*/
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( has_post_thumbnail() ? 'post-template post-t10' : 'post-template post-t10 post-t10-no-thumb' ); ?>>

	<?php list_category_posts(); ?>

	<div class="clear"><!-- --></div>

</div><!-- .post-template -->

