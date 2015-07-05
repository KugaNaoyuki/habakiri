<?php
/**
 * Version    : 1.0.1
 * Author     : Takashi Kitajima
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : July 5, 2015
 * License    : GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<?php Habakiri::the_bread_crumb(); ?>
<article>
	<?php do_action( 'habakiri_before_entry_content' ); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	<!-- end .entry-content --></div>
	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php Habakiri::the_link_pages(); ?>
	<?php
	if ( comments_open() || pings_open() || get_comments_number() ) {
		comments_template( '', true );
	}
	?>
</article>