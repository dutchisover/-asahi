<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<main class="main page__main">
	<h1 class="page__title" data-fade="0"><?php the_title(); ?></h1>

	<div class="breadcrumb" data-fade="100">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt;
			<span class="breadcrumb__current"><?php the_title(); ?></span>
		</div>
	</div>
	<!-- /.breadcrumb -->

	<?php
	echo '<div class="page-' . esc_attr($slug) . '">';
	if (have_posts()) :
		while (have_posts()) : the_post();
			the_content();
		endwhile;
	endif;
	echo '</div>';
	?>

</main>
<!-- /.main -->

<?php get_footer(); ?>
