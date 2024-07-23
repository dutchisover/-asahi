<?php get_header(); ?>


<main class="main page__main">
	<p class="page__title"><?php echo get_post_type_object(get_post_type())->label; ?></p>
	<div class="topics topics__single">
		<div class="breadcrumb">
			<div class="breadcrumb__inner">
				<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt;
				<a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="breadcrumb__link breadcrumb__category">
					<?php echo get_post_type_object(get_post_type())->label; ?>
				</a> &gt;
				<span class="breadcrumb__current"><?php the_title(); ?></span>
			</div>
		</div>

		<!-- /.breadcrumb__inner -->

		<!-- /.breadcrumb -->

		<article class="single__container">
			<div class="single__inner">
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
								<a href="" class="button__link">無料相談はこちら</a>
							</div>
						</div>
					</dd>
				</dl>


				<?php
				if (have_posts()) {
					while (have_posts()) : the_post();
						// カスタム投稿のslug
						$archive_slug = esc_html(get_post_type_object(get_post_type())->name);
						// カスタム投稿のタイトル
						$single_title = esc_html(get_post_type_object(get_post_type())->label);

						// アイキャッチ画像情報を取得
						$single_image = get_the_post_thumbnail($post->ID, 'full', array('class' => 'single__image'));
						if (!$single_image) {
							$single_image = '';
						}
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

						<p class="single__date">
							<time data-time="<?php echo get_the_date('c'); ?>"><?php the_time('Y-m-d'); ?></time>
							<span class="archive__item-taxonomy <?php echo esc_attr($taxonomy_class); ?>">
								<?php echo esc_html($taxonomy_name); ?>
							</span>
						</p>

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
			</div>
		</article>
	</div>
	<!-- /.single -->

</main>


<?php get_footer(); ?>