<?php
/*
  Template Name: Full Width
*/
?>
<?php get_header(); ?>
    <div id="main">
        <div id="content-full">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
                <h2>Sorry!</h2>
			<?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>