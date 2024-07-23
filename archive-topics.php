<?php get_header(); ?>

<main class="main page__main">
	<h1 class="page__title"><em>
			<?php post_type_archive_title(); ?></em><span>新着情報 一覧</span></h1>
	<div class="topics topics__archive">
		<div class="breadcrumb">
			<div class="breadcrumb__inner">
				<a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a> &gt; <span class="breadcrumb__current">新着情報 一覧</span>
			</div>

			<!-- /.breadcrumb__inner -->
		</div>
		<!-- /.breadcrumb -->
		<p class="is-center">大阪・鶴見区のフォトスタジオ「ECRU（エクリュ）」のスタッフブログです。<br>
			ECRUの最新情報をお届けいたします。</p>

		<article class="archive__inner">
			<ul class="archive__list">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'topics',
					'posts_per_page' => 9,
					'paged' => $paged
				);
				$topics_query = new WP_Query($args);
				if ($topics_query->have_posts()) :
					while ($topics_query->have_posts()) : $topics_query->the_post();
						// カスタムタクソノミーの取得
						$terms = get_the_terms(get_the_ID(), 'topics_taxonomy');
						// タクソノミーの選択がない場合は "お知らせ" を表示
						$taxonomy_name = 'お知らせ'; // デフォルトは "お知らせ"
						$taxonomy_class = 'taxonomy-news'; // デフォルトの背景色クラス

						if ($terms && !is_wp_error($terms)) {
							$term = array_shift($terms); // 最初のタームを取得
							$taxonomy_name = $term->name;
							if ($term->slug === 'news') {
								$taxonomy_class = 'taxonomy-news';
							} else {
								$taxonomy_class = 'taxonomy-other';
							}
						}
				?>
						<li class="archive__item">
							<a href="<?php the_permalink(); ?>" class="archive__item-link">
								<div class="archive__item-image">
									<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail('fullsize', ['alt' => get_the_title()]);
									} else {
										echo '<img src="' . get_template_directory_uri() . '/images/image_noimage.jpg" alt="No Image">';
									}
									?>
								</div>
								<div class="archive__item-content">
									<p class="archive__item-date">
										<time datetime="<?php echo get_the_date('c'); ?>"><?php the_time('Y-m-d'); ?></time>
										<span class="archive__item-taxonomy <?php echo esc_attr($taxonomy_class); ?>">
											<?php echo esc_html($taxonomy_name); ?>
										</span>
									</p>

									<p class="archive__item-title"><?php the_title(); ?></p>

									<p class="archive__item-text sp_none"><?php the_content(); ?></p>
								</div>
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
				<?php custom_pagination($topics_query->max_num_pages, "", $paged); ?>
			</div>
			<!-- /.pagination -->

		</article>
		<!-- /.archive__inner -->
	</div>
</main>
<!-- /.main -->

<?php get_footer(); ?>