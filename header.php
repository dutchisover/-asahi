	<!DOCTYPE html>
	<html lang="ja" prefix="og: http://ogp.me/ns#">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts -->
		<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Sans+JP&family=Zen+Maru+Gothic:wght@500;700&family=Zen+Old+Mincho:wght@400;500;700&display=swap" rel="stylesheet"> -->

		<?php get_template_part('inc/inc-tag-head'); ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part('inc/inc-tag-body'); ?>

		<header class="header">
			<div class="header__inner">
				<?php if (is_home() || is_front_page()) : ?>
					<h1 class="header__logo">
						<a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/image/logo.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="" height="">
						</a>
					</h1>
				<?php else : ?>
					<div class="header__logo">
						<a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/image/logo.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="" height="">
						</a>
					</div>
				<?php endif; ?>

				<div class="header__contact">
					<a href="tel:06-0545-5474" class="header__contact-tel">TEL : 06-0545-5474<span>営業時間 9:00 - 18:00</span></a>
					<a href="<?= home_url(); ?>/contact" class="header__contact-button">お問い合わせ</a>
				</div>
			</div>


			<nav class="header__nav">
				<ul class="header__nav-list">
					<li class="header__nav-item">
						<a href="<?= home_url(); ?>/" data-current="">ホーム</a>
					</li>
					<li class="header__nav-item">
						<a href="<?= home_url(); ?>/about" data-current="about#anc-lawyer">弁護士紹介</a>
					</li>
					<li class="header__nav-item">
						<a href="<?= home_url(); ?>/service" data-current="service">取り扱い業務</a>
					</li>
					<li class="header__nav-item">
						<a href="<?= home_url(); ?>/price" data-current="price">料金</a>
					</li>
					<li class="header__nav-item">
						<a href="<?= home_url(); ?>/topics" data-current="topics">新着情報</a>
					</li>
					<li class="header__nav-item">
						<a href="<?= home_url(); ?>/office" data-current="office">事務所概要</a>
					</li>
				</ul>
			</nav>

			<button class="nav_button pc-none">
				<img src="<?= get_template_directory_uri(); ?>/image/nav_button.svg" alt="メニューを開く" width="" height="" class="header__nav-button">
			</button>
			<button class="nav_button-close pc-none">
				<img src="<?= get_template_directory_uri(); ?>/image/nav_button-close.svg" alt="メニューを閉じる" width="" height="" class="header__nav-button">
			</button>
		</header>
