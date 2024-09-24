<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<main class="main page__main">
	<div class="page__title-area">
		<h1 class="page__title"><em><?php the_title(); ?></em><span>新着情報 一覧</span></h1>
	</div>
	<div class="breadcrumb">
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