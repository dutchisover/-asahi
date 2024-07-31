<?php get_header(); ?>

<!-- <?php
		// ページのスラッグを取得
		global $post;
		$slug = $post->post_name;
		?> -->

<main class="main page__main">

	<!-- mv -->
	<section class="mv">
		<!-- mv__swiper -->
		<div class="swiper" id="mv__swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_01_sp.jpg" media="(max-width: 820px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_01.jpg" alt="" width="1800" height="823" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_02_sp.jpg" media="(max-width: 820px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_02.jpg" alt="" width="1800" height="823" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_03_sp.jpg" media="(max-width: 820px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_03.jpg" alt="" width="1800" height="823" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_04_sp.jpg" media="(max-width: 820px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_04.jpg" alt="" width="1800" height="823" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_05_sp.jpg" media="(max-width: 820px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_05.jpg" alt="" width="1800" height="823" />
					</picture>
				</div>

			</div>
			<div class="swiper-pagination sp-none"></div>
			<div class="mv__container">
				<h2 class="mv__title">BRIGHTEN<br>YOUR FUTURE.</h2>
				<p class="mv__copy">より丁寧に、より迅速に、<br class="pc-none">ご依頼者様一人一人に寄り添う</p>
				<a class="mv__text" href="<?php echo esc_url(home_url()); ?>/contact">初回30分 相談料無料</a>
			</div>
		</div>
		<div class="mv-topics">
			<p class="mv-topics__title sp-none">new topics</p>
			<img src="<?= get_template_directory_uri(); ?>/assets/image/text_mv-topics_sp.svg" alt="New" class="pc-none mv-topics__title" width="73" height="89">
			<div class="mv-topics__container">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'topics',
					'posts_per_page' => 1,
					'paged' => $paged,
					'orderby' => 'date', // 日付で並び替え
					'order' => 'DESC',   // 降順で最新の投稿から取得
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
						// 投稿本文を取得し、HTMLタグを削除
						$content = get_the_content();
						$content = wp_strip_all_tags($content);

						// 10文字まで切り取る
						if (mb_strlen($content) > 16) {
							$content = mb_substr($content, 0, 16) . '...';
						}
				?>
						<a href="<?php the_permalink(); ?>" class="mv-topics__link">
							<p class="mv-topics__date sp-none">
								<time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y年n月d日'); ?></time>
							</p>
							<p class="mv-topics__date pc-none">
								<time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
							</p>
							<p class="mv-topics__taxonomy <?php echo esc_attr($taxonomy_class); ?>">
								<?php echo esc_html($taxonomy_name); ?>
							</p>
							<p class="mv-topics__text"><?php echo esc_html($content); ?></p>
						</a>
						<!-- /.archive__item -->
					<?php endwhile; ?>
				<?php
					wp_reset_postdata();
				else :
				?>
					<p>お知らせはありません。</p>
				<?php endif; ?>
			</div>
		</div>

	</section>
	<!-- /.mv -->

	<!-- MESSAGE ご挨拶 -->
	<section class="top-message">
		<div class="top-message__inner">
			<h2 class="section__title">
				<em>message</em>
				<span>ご挨拶</span>
			</h2>
			<div class="top-message__container">
				<div class="top-message__photo">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-message_sp.jpg" media="(max-width: 820px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-message.jpg" class="top-message__photo-image" alt="代表弁護士 谷井 光" width="420" height="477" />
					</picture>
				</div>
				<div class="top-message__content">
					<h3 class="top-message__title">ご依頼者様一人一人に寄り添い<br>全力でサポートいたします。</h3>
					<p class="section__text">当事務所のホームページをご覧いただきまして、誠にありがとうございます。<br>茨木あさひ法律事務所の代表弁護士 谷井光です。</p>
					<p class="section__text">都内の総合法律事務所で経験を重ねた後、茨木市を中心とした地域の皆さまに身近でより良い法的サービスを提供するため、当事務所を開設いたしました。</p>
					<p class="section__text">一人一人に寄り添い、全力でサポートいたしますので、安心してご相談ください。</p>
					<div class="top-message__lawyer">
						<p class="top-message__lawyer-position">代表弁護士</p>
						<p class="top-message__lawyer-name">谷井 光</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.top-message -->

	<!-- OUR FEATURES 私たちが選ばれる理由 -->
	<section class="top-features">
		<div class="top-features__inner">
			<h2 class="section__title">
				<em>our features</em>
				<span>私たちが選ばれる理由</span>
			</h2>
			<div class="top-features__container">
				<div class="swiper" id="features__swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="top-features__item">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-features_01.jpg" alt="分かりやすく丁寧な対応" class="top-features__item-image" width="728" height="456">
								<h3 class="top-features__item-title"><span>#</span><span class="top-features__item-number">01</span>分かりやすく丁寧な対応</h3>
								<p class="top-features__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="top-features__item">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-features_02.jpg" alt="交渉による早期解決に注力" class="top-features__item-image" width="728" height="456">
								<h3 class="top-features__item-title"><span>#</span><span class="top-features__item-number">02</span>交渉による早期解決に注力</h3>
								<p class="top-features__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="top-features__item">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-features_03.jpg" alt="安心の料金体系" class="top-features__item-image" width="728" height="456">
								<h3 class="top-features__item-title"><span>#</span><span class="top-features__item-number">03</span>安心の料金体系</h3>
								<p class="top-features__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

				<div class="button__area"><a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="button__link">私たちについて</a></div>
			</div>
	</section>
	<!-- /.top-features -->

	<!-- SERVICE 取り扱い業務 -->
	<section class="top-service">
		<div class="top-service__inner">
			<h2 class="section__title">
				<em>service</em>
				<span>取り扱い業務</span>
			</h2>
			<p class="section__text">当事務所の分野は「交通事故（被害者側）」「遺産相続／遺言」「労働（残業代請求・解雇・労災）」ですが、<br>それ以外にも幅広い分野を取扱っております。</p>
			<div class="top-service__container">
				<ul class="top-service__list">
					<li class="top-service__item">
						<a href="<?php echo esc_url(home_url()); ?>/service/family" class="top-service__item-link">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_01_sp.jpg" media="(max-width: 820px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_01.jpg" alt="遺産相続／遺言" width="423" height="236" class="top-service__item-image" />
							</picture>

							<h3 class="top-service__item-title"><span class="top-service__item-number pc-none">service #01</span><br class="pc-none">遺産相続／遺言</h3>
							<p class="top-service__item-text sp-none">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
					<li class="top-service__item">
						<a href="<?php echo esc_url(home_url()); ?>/service/labor" class="top-service__item-link">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_02_sp.jpg" media="(max-width: 820px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_02.jpg" alt="労働（残業代請求・解雇・労災）" width="423" height="236" class="top-service__item-image" />
							</picture>
							<h3 class="top-service__item-title"><span class="top-service__item-number pc-none">service #02</span><br class="pc-none">労働<span>（残業代請求・解雇・労災）</span></h3>
							<p class="top-service__item-text sp-none">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
					<li class="top-service__item">
						<a href="<?php echo esc_url(home_url()); ?>/service/traffic-accident" class="top-service__item-link">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_03_sp.jpg" media="(max-width: 820px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_03.jpg" alt="交通事故（被害者側）" width="423" height="236" class="top-service__item-image" />
							</picture>
							<h3 class="top-service__item-title"><span class="top-service__item-number pc-none">service #03</span><br class="pc-none">交通事故<span>（被害者側）</span></h3>
							<p class="top-service__item-text sp-none">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
					<li class="top-service__item">
						<a href="<?php echo esc_url(home_url()); ?>/service/divorce" class="top-service__item-link">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_04_sp.jpg" media="(max-width: 820px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_04.jpg" alt="離婚・男女問題" width="423" height="236" class="top-service__item-image" />
							</picture>
							<h3 class="top-service__item-title"><span class="top-service__item-number pc-none">service #04</span><br class="pc-none">離婚・男女問題</h3>
							<p class="top-service__item-text sp-none">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
				</ul>
				<ul class="top-service__sublist">
					<li class="top-service__subitem">
						<a href="<?php echo esc_url(home_url()); ?>/service/corporate-adviser" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">会社顧問</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="<?php echo esc_url(home_url()); ?>/service/realestate" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">不動産</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="<?php echo esc_url(home_url()); ?>/service/debt" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">借金・債務整理</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="<?php echo esc_url(home_url()); ?>/service/money" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">金銭トラブル（請求側／被請求側）</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="<?php echo esc_url(home_url()); ?>/service/detective" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">刑事</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="<?php echo esc_url(home_url()); ?>/service/company" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">法人破産・会社解散</h3>
						</a>
					</li>
				</ul>
				<div class="button__area"><a href="<?php echo esc_url(home_url()); ?>/service" class="button__link">取り扱い業務 一覧へ</a></div>
			</div>
	</section>
	<!-- /.top-service -->

	<!-- TOPICS 新着情報 -->
	<section class="top-topics">
		<div class="top-topics__inner">
			<h2 class="section__title">
				<em>topics</em>
				<span>新着情報</span>
			</h2>
			<div class="top-topics__container">
				<ul class="top-topics__list">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'topics',
						'posts_per_page' => 3,
						'paged' => $paged,
						'orderby' => 'date', // 日付で並び替え
						'order' => 'DESC',   // 降順で最新の投稿から取得
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
								$archive_image = '<img src="' . esc_url(get_template_directory_uri()) . '/assets/image/logo_footer_sp.svg" alt="" class="top-topics__item-noimage">';
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
							<li class="top-topics__item">
								<a href="<?php the_permalink(); ?>" class="top-topics__item-link">
									<div class="top-topics__item-image">
										<?php echo $archive_image; ?>
									</div>
									<div class="top-topics__item-content">
										<p class="top-topics__item-date">
											<time datetime="<?php echo get_the_date('c'); ?>"><?php the_time('Y-m-d'); ?></time>
											<span class="top-topics__item-taxonomy <?php echo esc_attr($taxonomy_class); ?>">
												<?php echo esc_html($taxonomy_name); ?>
											</span>
										</p>
										<h3 class="top-topics__item-title"><?php the_title(); ?></h3>
										<p class="top-topics__item-text sp-none"><?php echo esc_html($content); ?></p>
									</div>
								</a>
							</li>
							<!-- /.archive__item -->
						<?php endwhile; ?>
				</ul>
			<?php
						wp_reset_postdata();
					else :
			?>
				<p class="is-center">お知らせはありません。</p>
			<?php endif; ?>
			</div>
			<div class="button__area"><a href="<?php echo esc_url(home_url()); ?>/topics" class="button__link">新着情報 一覧へ</a></div>
	</section>
	<!-- /.top-topics -->

	<!-- OTHER -->
	<section class="top-other">
		<div class="top-other__inner">
			<div class="top-other__container">
				<div class="top-other__list">
					<div class="top-other__item">
						<a href="<?php echo esc_url(home_url()); ?>/price">
							<h2 class="top-other__item-title">
								<em>price</em>
								<span>料金</span>
							</h2>
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/photo_top-other_price.jpg" alt="料金" class="top-other__item-image" width="364" height="228">
							<div class="button__area sp-none">
								<p class="button__link">詳しく見る</p>
							</div>
						</a>
					</div>
					<div class="top-other__item">
						<a href="<?php echo esc_url(home_url()); ?>/service#anc-flow">
							<h2 class="top-other__item-title">
								<em>flow</em>
								<span>ご相談の流れ</span>
							</h2>
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/photo_top-other_flow.jpg" alt="ご相談の流れ" class="top-other__item-image" width="364" height="228">
							<div class="button__area sp-none">
								<p class="button__link">詳しく見る</p>
							</div>
						</a>
					</div>
					<div class="top-other__item">
						<a href="<?php echo esc_url(home_url()); ?>/office">
							<h2 class="top-other__item-title">
								<em>office</em>
								<span>事務所概要</span>
							</h2>
							<picture>
								<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/photo_top-other_office_sp.jpg" media="(max-width: 820px)">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/photo_top-other_office.jpg" alt="事務所概要" class="top-other__item-image" width="364" height="228">
							</picture>
							<div class="button__area sp-none">
								<p class="button__link">詳しく見る</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.top-other -->

</main>
<!-- /.main -->

<?php get_footer(); ?>