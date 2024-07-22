<?php get_header(); ?>

<!-- <?php
		// ページのスラッグを取得
		global $post;
		$slug = $post->post_name;
		?> -->

<main class="main page__main">

	<!-- mv -->
	<section class="mv">
		<!-- <div class="mv__inner"> -->
		<div class="swiper" id="mv__swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_01_sp.jpg" media="(max-width: 767px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_01.jpg" alt="" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_02_sp.jpg" media="(max-width: 767px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_02.jpg" alt="" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_03_sp.jpg" media="(max-width: 767px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_03.jpg" alt="" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_04_sp.jpg" media="(max-width: 767px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_04.jpg" alt="" />
					</picture>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_05_sp.jpg" media="(max-width: 767px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_mv_05.jpg" alt="" />
					</picture>
				</div>

			</div>
			<div class="swiper-pagination"></div>
			<div class="mv__container">
				<h2 class="mv__title">BRIGHTEN<br>YOUR FUTURE.</h2>
				<p class="mv__copy">より丁寧に、より迅速に、 ご依頼者様一人一人に寄り添う</p>
				<p class="mv__text">初回30分 相談料無料</p>
			</div>
			<div class="mv-topics">
				<p class="mv-topics__title">new topics</p>
				<div class="mv-topics__container">
					<p class="mv-topics__date"><time datetime="2023-07-23">2023年7月23日</p>
					<p class="mv-topics__taxonomy">ニュース</p>
					<p class="mv-topics__text">8月のお得なキャンペーン…</p>
					<!-- テキスト文字数制限あり？ -->
				</div>
			</div>
			<!-- </div> -->

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
						<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-message_sp.jpg" media="(max-width: 767px)" />
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-message.jpg" class="top-message__photo-image" alt="ご依頼者様一人一人に寄り添い全力でサポートいたします。" />
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
	<!-- /MESSAGE ご挨拶 -->

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
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-features_01.jpg" alt="" class="top-features__item-image" width="728" height="456">
								<h3 class="top-features__item-title"><span>#</span><span class="top-features__item-number">01</span>分かりやすく丁寧な対応</h3>
								<p class="top-features__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="top-features__item">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-features_02.jpg" alt="" class="top-features__item-image" width="728" height="456">
								<h3 class="top-features__item-title"><span>#</span><span class="top-features__item-number">02</span>交渉による早期解決に注力</h3>
								<p class="top-features__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="top-features__item">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-features_03.jpg" alt="" class="top-features__item-image" width="728" height="456">
								<h3 class="top-features__item-title"><span>#</span><span class="top-features__item-number">03</span>安心の料金体系</h3>
								<p class="top-features__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>

					<!-- </div> -->

				</div>
				<div class="button__area"><a href="" class="button__link">私たちについて</a></div>
			</div>
	</section>

	<!-- SERVICE 取り扱い業務 -->
	<section class="top-service">
		<div class="top-service__inner">
			<h2 class="section__title">
				<em>service</em>
				<span>取り扱い業務</span>
			</h2>
			<p class="section__text is-center">当事務所の分野は「交通事故（被害者側）」「遺産相続／遺言」「労働（残業代請求・解雇・労災）」ですが、<br>それ以外にも幅広い分野を取扱っております。</p>
			<div class="top-service__container">
				<ul class="top-service__list">
					<li class="top-service__item">
						<a href="" class="top-service__item-link">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_01_sp.jpg" media="(max-width: 767px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_01.jpg" alt="" width="423" height="236" class="top-service__item-image" />
							</picture>
							<h3 class="top-service__item-title">遺産相続／遺言</h3>
							<p class="top-service__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
					<li class="top-service__item">
						<a href="">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_02_sp.jpg" media="(max-width: 767px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_02.jpg" alt="" width="423" height="236" class="top-service__item-image" />
							</picture>
							<h3 class="top-service__item-title">労働（残業代請求・解雇・労災）</h3>
							<p class="top-service__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
					<li class="top-service__item">
						<a href="">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_03_sp.jpg" media="(max-width: 767px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_03.jpg" alt="" width="423" height="236" class="top-service__item-image" />
							</picture>
							<h3 class="top-service__item-title">交通事故（被害者側）</h3>
							<p class="top-service__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
					<li class="top-service__item">
						<a href="">
							<picture>
								<source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_04_sp.jpg" media="(max-width: 767px)" />
								<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_top-service_04.jpg" alt="" width="423" height="236" class="top-service__item-image" />
							</picture>
							<h3 class="top-service__item-title">離婚・男女問題</h3>
							<p class="top-service__item-text">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
						</a>
					</li>
				</ul>
				<ul class="top-service__sublist">
					<li class="top-service__subitem">
						<a href="" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">会社顧問</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">不動産</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">借金・債務整理</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">金銭トラブル（請求側／被請求側）</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">刑事</h3>
						</a>
					</li>
					<li class="top-service__subitem">
						<a href="" class="top-service__subitem-link">
							<h3 class="top-service__subitem-title">法人破産・会社解散</h3>
						</a>
					</li>

				</ul>

				<div class="button__area"><a href="" class="button__link">取り扱い業務 一覧へ</a></div>
			</div>
	</section>

	<!-- TOPICS 新着情報 -->
	<section class="top-topics">
		<div class="top-topics__inner">
			<h2 class="section__title">
				<em>topics</em>
				<span>新着情報</span>
			</h2>
			<div class="top-topics__container">
				<ul class="top-topics__list">
					<!-- ループ文字数制限 -->
					<li class="top-topics__item">
						<a href="" class="top-topics__item-link">
							<img src="" alt="" class="top-topics__item-image">
							<div class="top-topics__item-content">
								<p class=" top-topics__item-date"><time datetime="2023-07-23">2023-07-23</p>
								<p class="top-topics__item-taxonomy">NEWS</p>
								<p class="top-topics__item-title">冬期休業のお知らせ</p>
								<p class="top-topics__item-text">休業期間中に頂いたお問合せにつきましては、営業開始日以降に順次回答させて頂きます。<br> 皆様には大変ご不便をお掛け致しますが、何卒ご理解頂けますようお願い申し上げます。</p>
							</div>
						</a>
					</li>
					<li class="top-topics__item">
						<a href="" class="top-topics__item-link">
							<img src="" alt="" class="top-topics__item-image">
							<div class="top-topics__item-content">
								<p class="top-topics__item-date"><time datetime="2023-07-23">2023-07-23</p>
								<p class="top-topics__item-taxonomy">コラム</p>
								<p class="top-topics__item-title">定年後再雇用の際の同一労働同一賃金に関する最高裁判所の判断について</p>
								<p class="top-topics__item-text">高年齢者等の雇用の安定等に関する法律第9条では、65歳未満の定年を定めている事業主に対し、①65歳まで定年年齢の引き上げる、②65歳までの継続雇用制度の導入、③定年制の廃止のいずれかの措置を講ずることを義務付けており…</p>
							</div>
						</a>
					</li>
					<li class="top-topics__item">
						<a href="" class="top-topics__item-link">
							<img src="" alt="" class="top-topics__item-image">
							<div class="top-topics__item-content">
								<p class="top-topics__item-date"><time datetime="2023-07-23">2023-07-23</p>
								<p class="top-topics__item-taxonomy">コラム</p>
								<p class="top-topics__item-title">固定残業代を支給する際に注意するべきこと【企業向け】</p>
								<p class="top-topics__item-text">残業代（時間外手当、休日手当、深夜手当）は、残業時間に応じて支給するのが原則ですが、業務の性質上、一定の残業が見込まれる業種では、固定残業代を設定することが一般的であり、当事務所の顧問先企業でも固定残業代を支給している…</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="button__area"><a href="" class="button__link">新着情報 一覧へ</a></div>
	</section>

	<!-- OTHER -->
	<section class="top-other">
		<div class="top-other__inner">
			<div class="top-other__container">
				<ul class="top-other__list">
					<li class="top-other__item">
						<h2 class="top-other__item-title">
							<em>price</em>
							<span>新着情報</span>
						</h2>
						<img src="" alt="" class="top-other__item-image">
						<div class="button__area">
							<a href="" class="button__link">もっと詳しく</a>
						</div>
					</li>
					<li class="top-other__item">
						<h2 class="top-other__item-title">
							<em>flow</em>
							<span>ご相談の流れ</span>
						</h2>
						<img src="" alt="" class="top-other__item-image">
						<div class="button__area">
							<a href="" class="button__link">もっと詳しく</a>
						</div>
					</li>
					<li class="top-other__item">
						<h2 class="top-other__item-title">
							<em>office</em>
							<span>事務所概要</span>
						</h2>
						<img src="" alt="" class="top-other__item-image">
						<div class="button__area">
							<a href="" class="button__link">もっと詳しく</a>
						</div>

					</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- <?php
			echo '<div class="page-' . esc_attr($slug) . '">';
			if (have_posts()) :
				while (have_posts()) : the_post();
					the_content();
				endwhile;
			endif;
			echo '</div>';
			?> -->

</main>
<!-- /.main -->

<?php get_footer(); ?>