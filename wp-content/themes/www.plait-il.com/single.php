<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<h1 class="entry-title title-article large-12 columns"><?php the_title(); ?></h1>
<div id="single-post" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<p class="texte-courant"><?php foundationpress_entry_meta(); ?></p>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<h2 class="sous-titre"><?php echo $value = get_field("sous_titre");?><h2>
		<div class="entry-content">

		<?php
		//	if ( has_post_thumbnail() ) :
			//	the_post_thumbnail();
		//	endif;
		?>

		<?php the_content(); ?>
		<img src="<?php echo get_field('image_projet_1'); ?>" alt="" />
		<img src="<?php echo get_field('image_projet_2'); ?>" alt="" />
		<img src="<?php echo get_field('image_projet_3'); ?>" alt="" />
		</div>
	<!--	<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>-->
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

<div class="large-4 columns sidebar-article">
	<div class="caracteristiques-sidebar">
		<p class="texte-courant"><?php echo $value = get_field("date");?></p>
		<p  class="texte-courant"><?php echo $value = get_field("caracteristiques");?></p>
		<p  class="texte-courant"><?php echo the_category (' / '); ?> </p>
		<a href="<?php echo $value = get_field("url_site_client");?>" class="voir-site" target="_blank">VOIR LE SITE</a>
	</div>
	<div class="socials-sidebar text-center">
		<h3>Partager le projet :</h3>
		<a class="#"><i class="fa fa-facebook"></i></a>
		<a class="#"><i class="fa fa-twitter"></i></a>
		<a class="#"><i class="fa fa-github"></i></a>
		<a class="#"><i class="fa fa-pinterest"></i></a>
	</div>
</div>
<?php //get_sidebar(); ?>
</div>
<?php get_footer();
