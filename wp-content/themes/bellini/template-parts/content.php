<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellini
 */
global $bellini;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
<div class="row">
<div class="blog__post col-md-12">

	<div class="col-md-8 layout-golden--one__left">
		<?php echo bellini_post_thumbnail();?>
    </div> <!-- layout left end -->

    <div class="col-md-4 layout-golden--one__right">
	    <div class="blog__post__right">
		    <header class="entry-header">
				<?php the_title( sprintf( '<h3 class="entry-title">',
				esc_url( get_permalink() ) ), '</h3>' ); ?>
			</header><!-- .entry-header -->
		    <div class="blog__post__excerpt">
		       <?php
					//the_excerpt( sprintf(
					/* translators: %s: Name of current post. */
					/*wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bellini' ),
						array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );*/
               $content = get_the_content();
               echo apply_filters( 'the_content', $content );
				?>
		    </div><!-- .blog__post__excerpt -->

	        <?php if($bellini['bellini_read_more_title'] == true): ?>
				<div class="button button--secondary" role="button">
            		<?php echo esc_html($bellini[ 'bellini_read_more_title']); ?>
            	</div>
			<?php endif; ?>

	    </div><!-- Blog Post right end -->
    </div><!-- layout right end -->
</div>
</div>
</article><!-- #post-## -->