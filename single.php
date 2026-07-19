<?php
get_header();
?>

<main class="site-main">

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>

<article class="post">

	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	}
	?>

	<h1><?php the_title(); ?></h1>

	<p>
		Published:
		<?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
		|
		Author:
		<?php the_author(); ?>
	</p>

	<p>
		Category:
		<?php the_category( ', ' ); ?>
	</p>

	<?php the_content(); ?>

	<p>
		Tags:
		<?php the_tags( '', ', ', '' ); ?>
	</p>

	<?php comments_template(); ?>

</article>

<?php
	endwhile;
endif;
?>

</main>

<?php
get_footer();