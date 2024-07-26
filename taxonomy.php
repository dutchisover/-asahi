<?php get_header(); ?>
<div class="page__header">
	<div class="page__mv">
		<h1 class=" page__title">
			<em>topics</em>
			<span>新着情報 一覧</span>
		</h1>

		<picture>
			<source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-topics_sp.jpg">
			<img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-topics.jpg" alt="" class="page__mv-bg" width="1800" height="502">
		</picture>
	</div>
	<!-- /.page__mv -->

	<!-- breadcrumb -->
	<div class="breadcrumb">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
			<span class="breadcrumb__current">新着情報 一覧</span>
		</div>
	</div>
	<!-- /.breadcrumb -->
</div>


<main class="main page__main">
	<div class="archive-topics">
		<section class="section" data-section-title="News & Column">
			<p class="section__copy">大阪・鶴見区のフォトスタジオ「ECRU（エクリュ）」のスタッフブログです。<br>
				ECRUの最新情報をお届けいたします。</p>
			<div class="topics__content">

				<!-- sidebar -->
				<section class="topics__sidebar">
					<?php get_sidebar('topics'); ?>
				</section>

				<!-- 記事一覧 -->
				<div class="archive__container">
					<ul class="archive__list">
						<?php
						if (wp_is_mobile()) {
							//スマホ・タブレットの時
							$num = 6;
						} else {
							//PCの時
							$num = 9;
						}
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$queried_object = get_queried_object();

						// タクソノミーの選択がない場合はスラッグ 'news' の投稿を取得
						if (isset($queried_object->slug) && $queried_object->slug !== 'news') {
							$terms_slug = $queried_object->slug;
							$tax_query = array(
								array(
									'taxonomy' => 'topics_taxonomy',
									'field'    => 'slug',
									'terms'    => $terms_slug,
								),
							);
						} else {
							$terms_slug = 'news';
							$tax_query = array(
								'relation' => 'OR',
								array(
									'taxonomy' => 'topics_taxonomy',
									'field'    => 'slug',
									'terms'    => $terms_slug,
								),
								array(
									'taxonomy' => 'topics_taxonomy',
									'operator' => 'NOT EXISTS'
								)
							);
						}

						$args = array(
							'post_type' => 'topics',
							'posts_per_page' => $num,
							'paged' => $paged,
							'tax_query' => $tax_query,
						);

						$topics_query = new WP_Query($args);

						if ($topics_query->have_posts()) :
							while ($topics_query->have_posts()) : $topics_query->the_post();

								// カスタムタクソノミーの取得
								$terms = get_the_terms(get_the_ID(), 'topics_taxonomy');

								// アイキャッチ画像の取得
								$archive_image = '';
								if (has_post_thumbnail()) {
									$archive_image = get_the_post_thumbnail($post->ID, 'fullsize', ['alt' => get_the_title()]);
								} else {
									$archive_image = '<img src="' . esc_url(get_template_directory_uri()) . '/assets/image/logo_footer_sp.svg" alt="" class="archive__item-noimage">';
								}

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

								// 投稿本文を取得し、HTMLタグを削除
								$content = get_the_content();
								$content = wp_strip_all_tags($content);

								// 110文字まで切り取る
								if (mb_strlen($content) > 110) {
									$content = mb_substr($content, 0, 110) . '...';
								}
						?>

								<li class="archive__item">
									<a href="<?php the_permalink(); ?>" class="archive__item-link">
										<div class="archive__item-image">
											<?php echo $archive_image; ?>
										</div>
										<div class="archive__item-content">
											<p class="archive__item-date">
												<time datetime="<?php echo get_the_date('c'); ?>"><?php the_time('Y-m-d'); ?></time>
												<span class="archive__item-taxonomy <?php echo esc_attr($taxonomy_class); ?>">
													<?php echo esc_html($taxonomy_name); ?>
												</span>
											</p>

											<h2 class="archive__item-title"><?php the_title(); ?></h2>

											<!-- <p class="archive__item-text sp_none"><?php the_content(); ?></p> -->
											<p class="archive__item-text sp-none"><?php echo esc_html($content); ?></p>
										</div>
									</a>
								</li>
								<!-- /.archive__item -->
							<?php endwhile; ?>
					</ul>
					<!-- /.archive__list -->

					<!-- .pagination -->
					<div class="pagination">
						<?php
							// ページネーションの表示
							$big = 999999999; // need an unlikely integer
							$pagination_args = array(
								'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
								'format' => '?paged=%#%',
								'total' => $topics_query->max_num_pages,
								'current' => $paged,
								'type' => 'list',
								'prev_text' => __('<'),
								'next_text' => __('>'),
							);
							echo paginate_links($pagination_args);
						?>
					</div>
					<!-- /.pagination -->

				<?php
							wp_reset_postdata();
						else :
				?>
					<p class="is-center">お知らせはありません。</p>
				<?php endif; ?>
				</div>
			</div>
		</section>
	</div>
</main>
<!-- /.main -->

<?php get_footer(); ?>