<?php get_header(); ?>


<main class="main page__main">
	<p class="page__title"><?php echo get_post_type_object(get_post_type())->label; ?></p>

	<div class="breadcrumb" data-fade="100">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt;
			<a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="breadcrumb__link breadcrumb__category">
				<?php echo get_post_type_object(get_post_type())->label; ?>
			</a> &gt;
			<span class="breadcrumb__current"><?php the_title(); ?></span>
		</div>
	</div>

	<!-- /.breadcrumb__inner -->
	</div>
	<!-- /.breadcrumb -->

	<article class="single__inner">

		<?php
		if (have_posts()) {
			while (have_posts()) : the_post();
				// カスタム投稿のslug
				$archive_slug = esc_html(get_post_type_object(get_post_type())->name);
				// タームのslug
				// カスタム投稿のタイトル
				$single_title = esc_html(get_post_type_object(get_post_type())->label);
				// 投稿日
				$single_date = get_the_date('Y.m.d');
				// アイキャッチ画像情報を取得
				$single_image = get_the_post_thumbnail($post->ID, 'full', array('class' => 'single__image'));
				if (!$single_image) {
					$single_image = '';
				}
		?>

				<div class="single__date">
					<time data-time="<?= $single_date; ?>"><?= $single_date; ?></time>
				</div>

				<h1 class="single__title"><?php the_title(); ?></h1>

				<!-- 記事内容 -->
				<div class="single__content">
					<?php
					the_content();
					?>
				</div>

				<div class="single__button">
					<a href="../" class="button__return">お知らせ一覧へ</a>
				</div>
		<?php
			endwhile;
		}
		?>

	</article>
	<!-- /.single -->

</main>


<?php get_footer(); ?>
