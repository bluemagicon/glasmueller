<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package braveandwray
 * @subpackage baw.base
 * @since braveandwray 1.0
 */

include 'post/load-vars.php';

?>

<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">

        <?php if(! $hide_images) { ?>
            <a href="<?= get_permalink(); ?>">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
            </a>
        <?php } ?>

		<div class="post-content">
            <h3 class="is-style-h3"><?php the_title(); ?></h3>
			<?php if(! $hide_descr) { ?>
				<?php the_excerpt(); ?>
			<?php } ?>
            <a class="button-plain" href="<?= get_permalink(); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="7.745" height="12" viewBox="0 0 7.745 12">
                    <path id="FontAwsome_angle-right_" data-name="FontAwsome (angle-right)" d="M32.231,102.587l-5.1,5.1a.9.9,0,0,1-1.271,0l-.847-.847a.9.9,0,0,1,0-1.271l3.614-3.614L25.014,98.34a.9.9,0,0,1,0-1.271l.843-.855a.9.9,0,0,1,1.271,0l5.1,5.1A.9.9,0,0,1,32.231,102.587Z" transform="translate(-24.75 -95.95)" fill="#e4032e"/>
                </svg>
                mehr erfahren
            </a>
		</div>

	</div>

</article>
