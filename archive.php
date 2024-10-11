<?php get_header(); ?>

<main class="main page__main">
	<h1 class="page__title" data-fade="0"><?php post_type_archive_title(); ?></h1>

	<div class="breadcrumb" data-fade="100">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt; <span class="breadcrumb__current"><?php post_type_archive_title(); ?></span>
		</div>

		<!-- /.breadcrumb__inner -->
	</div>
	<!-- /.breadcrumb -->

	<article class="archive__inner">
		<ul class="archive__list" data-fade="100">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'news',
				'posts_per_page' => 12,
				'paged' => $paged
			);
			$news_query = new WP_Query($args);
			if ($news_query->have_posts()) :
				while ($news_query->have_posts()) : $news_query->the_post(); ?>
					<li class="archive__item">
						<a href="<?php the_permalink(); ?>">
							<p class="archive__date"><?php the_time('Y.m.d'); ?></p>
							<p class="archive__text"><?php the_title(); ?></p>
						</a>
					</li>
					<!-- /.archive__item -->
				<?php endwhile;
				wp_reset_postdata();
			else : ?>
				<p>お知らせはありません。</p>
			<?php endif; ?>
		</ul>
		<!-- /.archive__list -->

		<div class="pagination">
			<?php custom_pagination($news_query->max_num_pages, "", $paged); ?>
		</div>
		<!-- /.pagination -->

	</article>
	<!-- /.archive__inner -->

</main>
<!-- /.main -->

<?php get_footer(); ?>
