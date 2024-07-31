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

	<div class="breadcrumb">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
			<a href="<?php echo home_url(); ?>/topics/" class="breadcrumb__link">新着情報 一覧</a>
			<span class="breadcrumb__current"><?php the_title() ?></span>
		</div>
	</div>
	<!-- /.breadcrumb -->
</div>

<main class="main page__main">
	<div class="single-topics">
		<section class="section" data-section-title="News & Column">
			<div class="topics__content">
				<!-- sidebar -->
				<section class="topics__sidebar sp-none">
					<?php get_sidebar('topics'); ?>
				</section>
				<!-- メインコンテンツ -->
				<article class="single__container">
					<div class="single__inner">
						<?php
						if (have_posts()) {
							while (have_posts()) : the_post();

								// アイキャッチ画像情報を取得
								$single_image = get_the_post_thumbnail($post->ID, 'full');
								if (!$single_image) {
									$single_image = '';
								}
								// タクソノミーの選択がない場合は "お知らせ" を表示
								$taxonomy_name = 'お知らせ'; // デフォルトは "お知らせ"
								$taxonomy_class = 'taxonomy-news'; // デフォルトの背景色クラス
								$term_link = get_term_link('news', 'topics_taxonomy'); // デフォルトのリンク

								// カスタムタクソノミーの取得
								$terms = get_the_terms(get_the_ID(), 'topics_taxonomy');

								if ($terms && !is_wp_error($terms)) {
									$term = array_shift($terms); // 最初のタームを取得
									$taxonomy_name = $term->name;
									if ($term->slug === 'news') {
										$taxonomy_class = 'taxonomy-news';
									} else {
										$taxonomy_class = 'taxonomy-other';
									}
									$term_link = get_term_link($term->slug, 'topics_taxonomy');
								}
						?>
								<!-- 記事タイトル部分 -->
								<h2 class="single__title"><?php the_title(); ?></h2>
								<p class="single__date">
									<a class="single__taxonomy <?php echo esc_attr($taxonomy_class); ?>" href="<?php echo esc_url($term_link); ?>">
										<?php echo esc_html($taxonomy_name); ?>
									</a>
									<time data-time="<?php echo get_the_date('c'); ?>"><?php the_time('Y-m-d'); ?></time>
								</p>
								<span class="single__line"></span>

								<!-- 記事監修者 アコーディオン -->
								<dl class="single__editor js-accordion">
									<dt class="single__editor-header js-accordion__header" tabindex="0" aria-expanded="false">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/image/photo_topics-editor.jpg" alt="記事監修者 : 茨木あさひ法律事務所 代表弁護士 谷井 光" class="single__editor-image">
										<div class="single__editor-name">
											<p>記事監修者 : 茨木あさひ法律事務所</p>
											<p class="single__editor-name"><span>代表弁護士</span>谷井 光</p>
										</div>
									</dt>
									<dd class="single__editor-content js-accordion__content">
										<div class="single__editor-inner">
											<p class="single__editor-text">第二東京弁護士会所属。交通事故に遭ってしまったらまず何をすれば良いのか、また今後どうなっていくのかご存じの方は少ないのが現状です。<br>
												「交通事故弁護士アトム」では、交通事故に遭った直後に行うべきことや入院・通院中に起こる出来事、保険会社との示談交渉や慰謝料の解決方法を詳しく解説しています。<br>
												アトム法律事務所では、全国24時間、無料相談窓口を設けておりますので、お困りごとがあればいつでもご連絡ください。</p>

											<div class="button__area">
												<a href="<?php echo esc_url(home_url()); ?>/contact" class="button__link">無料相談はこちら</a>
											</div>
										</div>
									</dd>
								</dl>
								<!-- 記事監修者 アコーディオンここまで -->

								<!-- アイキャッチ画像 -->
								<div class="single__image">
									<?php echo $single_image; ?>
								</div>
								<!-- 記事内容 -->
								<div class="single__content">
									<?php
									the_content();
									?>
								</div>

								<!-- 弁護士プロフィール -->
								<?php
								get_template_part('/assets/inc/inc-profile');
								?>

								<?php
								get_template_part('/assets/inc/inc-cta-button');
								?>

						<?php
							endwhile;
						}
						?>
					</div>
				</article>
			</div>
			<!-- /.single -->
		</section>
	</div>
</main>


<?php get_footer(); ?>