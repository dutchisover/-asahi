	<!DOCTYPE html>
	<html lang="ja" prefix="og: http://ogp.me/ns#">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts -->
		<script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?5ff66db6807442a0aa8a3222e90393a3" charset="utf-8"></script>

		<?php get_template_part('inc/inc-tag-head'); ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part('inc/inc-tag-body'); ?>

		<?php if (is_home() || is_front_page()) : ?>
			<div id="splash">
				<div id="splash_text">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/logo_loading.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" width="189" height="265">
				</div>
			</div>
		<?php endif; ?>

		<header class="header">
			<p class="header__description pc-none">茨木市の弁護士 相続・離婚・交通事故・会社顧問の法律相談</p>

			<div class="header__inner">
				<?php if (is_home() || is_front_page()) : ?>
					<h1 class="header__logo">
						<a href="<?= home_url(); ?>">
							<picture>
								<source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/logo_sp.svg">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="348" height="67">
							</picture>
						</a>
					</h1>
				<?php else : ?>
					<div class="header__logo">
						<a href="<?= home_url(); ?>">
							<picture>
								<source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/logo_sp.svg">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="348" height="67">
							</picture>
						</a>
					</div>
				<?php endif; ?>

				<div class="header__container">
					<div class="header__contact">
						<a href="tel:072-627-0101" class="header__contact-tel">
							<strong><span>TEL :</span>072-627-0101</strong>
							<em>受付時間 9:00 - 18:00 (土日祝定休)</em></a>

						<a href="<?= home_url(); ?>/contact" class="header__contact-button"><span class="pc-none">メールで</span>お問い合わせ</a>

						<address class="header__contact-address pc-none">
							<span>〒567-0032</span>
							<em>大阪府茨木市西駅前町５番３６号 茨木高橋ビル８階東</em>
							<a href="https://maps.app.goo.gl/JGktHu7LFDC4Vqxb9" target="_blank" rel="noopener noreferrer">Googlemapでみる</a>
						</address>
					</div>

					<nav class="header__nav">
						<ul class="header__nav-list">
							<li class="header__nav-item">
								<a href="<?= home_url(); ?>/" data-subtitle="Top Page" data-current=""><span class="sp-none">ホーム</span><span class="pc-none">トップページ</span></a>
							</li>
							<li class="header__nav-item">
								<a href="<?= home_url(); ?>/about#anc-lawyer" data-subtitle="Lawyer" data-current="about">弁護士紹介</a>
							</li>
							<li class="header__nav-item">
								<a href="<?= home_url(); ?>/service" data-subtitle="Service" data-current="service"><span>取扱業務<span class="pc-none"> 一覧</span></span></a>
							</li>
							<li class="header__nav-item">
								<a href="<?= home_url(); ?>/price" data-subtitle="Price" data-current="price">料金</a>
							</li>
							<li class="header__nav-item">
								<a href="<?= home_url(); ?>/topics" data-subtitle="Topicks" data-current="topics"><span>新着情報<span class="pc-none"> 一覧</span></span></a>
							</li>
							<li class="header__nav-item">
								<a href="<?= home_url(); ?>/office" data-subtitle="Office & Access" data-current="office">事務所概要</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>




			<div class="header__nav-button-area">
				<button class="header__nav-button pc-none">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/button_header-nav.svg" alt="メニューを開く" width="115" height="115">
				</button>
				<button class="header__nav-button-close header__nav-button pc-none">
					<img src="<?= get_template_directory_uri(); ?>/assets/image/button_header-nav_close.svg" alt="メニューを閉じる" width="115" height="115">
				</button>
			</div>
		</header>
