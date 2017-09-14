<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
    <div id="header">
        <h1>
            <a href="<?php echo home_url(); ?>">
				<?php bloginfo( 'name' ); ?>
            </a>
        </h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </div>
    <div id="main">
        <div id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p>
					<?php echo get_the_date(); ?> <?php echo get_the_time(); ?>
                    | Category : <?php the_category( ', ' ); ?>
                </p>
				<?php if ( is_home() || is_category() || is_tag() ) {
					the_excerpt();
				} else {
					the_content();
				} ?>
			<?php endwhile; else: ?>
                <h2>Sorry!</h2>
			<?php endif; ?>
        </div>
        <div id="sidebar">
            <h2>Menu</h2>
        </div>
    </div>
    <div id="footer">
        <h3>Copyright</h3>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>