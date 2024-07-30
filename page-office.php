<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<div class="page__header">
	<div class="page__mv">
		<h1 class=" page__title">
			<em><?= get_the_title(); ?></em>
			<span><?= get_field("page-sub-title") ?></span>
		</h1>

		<picture>
			<source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-office_sp.jpg">
			<img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-office.jpg" alt="Office 事務所のご案内" class="page__mv-bg" width="1800" height="502">
		</picture>
	</div>
	<!-- /.page__mv -->

	<div class="breadcrumb">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
			<span class="breadcrumb__current"><?= get_field("page-sub-title") ?></span>
		</div>
	</div>
	<!-- /.breadcrumb -->
</div>

<main class="main page__main">
	<?php
	echo '<div class="page-' . esc_attr($slug) . '">';
	?>

	<section class="section" data-section-title="our office">
		<div class="office__container">
			<h2 class="section__title">
				<em>our office</em>
				<span>事務所概要</span>
			</h2>
			<div class="swiper" id="office__swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="office__item">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_01.jpg" alt="茨木あさひ法律事務所" class="office__item-image" width="900" height="374">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="office__item">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_02.jpg" alt="茨木あさひ法律事務所" class="office__item-image" width="900" height="374">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="office__item">
							<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_03.jpg" alt="茨木あさひ法律事務所" class="office__item-image" width="900" height="374">
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<div class="office__data-list">
				<dl class="office__data-item">
					<dt class="office__data-title">名称</dt>
					<dd class="office__data-content">茨木あさひ法律事務所</dd>
				</dl>
				<dl class="office__data-item">
					<dt class="office__data-title">設立</dt>
					<dd class="office__data-content">2024年 8月</dd>
				</dl>
				<dl class="office__data-item">
					<dt class="office__data-title">代表者</dt>
					<dd class="office__data-content">谷井 光</dd>
				</dl>
				<dl class="office__data-item">
					<dt class="office__data-title">住所</dt>
					<dd class="office__data-content">〒567-0032<br>
						大阪府茨木市西駅前町５番３６号 <br class="pc-none">茨木高橋ビル８階東<br>
						<a href=" https://maps.app.goo.gl/G7pRhpPKXmZorzkJ7" target="_blank" rel="noopener noreferrer">Googlemapでみる</a>
					</dd>
				</dl>
				<dl class="office__data-item">
					<dt class="office__data-title">連絡先</dt>
					<dd class="office__data-content">TEL　03-6273-1490　　　　<br class="pc-none">FAX　03-6273-1491<br>
						E-mail　info[a]otaka-law.com
					</dd>
				</dl>
				<dl class="office__data-item">
					<dt class="office__data-title">営業時間</dt>
					<dd class="office__data-content">平日 9:00-18:00</dd>
				</dl>
				<dl class="office__data-item">
					<dt class="office__data-title">業務内容</dt>
					<dd class="office__data-content">相続・事業承継、不動産、企業顧問を中心とした各種法律問題対応全般</dd>

				</dl>
			</div>
		</div>
	</section>

	<section class="section" data-section-title="access" id="anc-access">
		<h2 class="section__title">
			<em>Access</em>
			<span>アクセス</span>
		</h2>
		<p class="section__copy">ＪＲ茨木駅（西口）から徒歩２分<br>
			お車でお越しの方は近隣パーキング（事務所から徒歩１分）をご利用ください</p>
		<div class="access__container">
			<div class="access__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.5800663594778!2d135.5612627!3d34.8165054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e32af0b51883%3A0xe1ec4407f263e867!2z44CSNTY3LTAwMzIg5aSn6Ziq5bqc6Iyo5pyo5biC6KW_6aeF5YmN55S677yV4oiS77yT77yW!5e0!3m2!1sja!2sjp!4v1722154206295!5m2!1sja!2sjp" width="1152" height="486" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			<h3 class="section__title">
				<em>事務所までの道順</em>
				<span>Directions</span>
			</h3>
			<div class="access__list">
				<div class="access__item">
					<picture>
						<source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_01_sp.jpg">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_01.jpg" alt="" class="access__item-image" width="350" height="251">
					</picture>

					<p class="access__item-title">Step 01</p>
					<p class="access__item-text">「東梅田駅７番出口」から地上に出て，左（南）に進みます。御堂筋に沿って，南に進んでください。</p>

				</div>
				<div class="access__item">
					<picture>
						<source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_02_sp.jpg">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_02.jpg" alt="" class="access__item-image" width="350" height="251">
					</picture>
					<p class="access__item-title">Step 02</p>
					<p class="access__item-text">「東梅田駅７番出口」から地上に出て，左（南）に進みます。御堂筋に沿って，南に進んでください。</p>
				</div>
				<div class="access__item">
					<picture>
						<source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_03_sp.jpg">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_03.jpg" alt="" class="access__item-image" width="350" height="251">
					</picture>
					<p class="access__item-title">Step 03</p>
					<p class="access__item-text">「東梅田駅７番出口」から地上に出て，左（南）に進みます。御堂筋に沿って，南に進んでください。</p>
				</div>
				<div class="access__item">
					<picture>
						<source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_04_sp.jpg">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_04.jpg" alt="" class="access__item-image" width="350" height="251">
					</picture>
					<p class="access__item-title">Step 04</p>
					<p class="access__item-text">「東梅田駅７番出口」から地上に出て，左（南）に進みます。御堂筋に沿って，南に進んでください。</p>
				</div>
				<div class="access__item">
					<picture>
						<source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_05_sp.jpg">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_05.jpg" alt="" class="access__item-image" width="350" height="251">
					</picture>
					<p class="access__item-title">Step 05</p>
					<p class="access__item-text">「東梅田駅７番出口」から地上に出て，左（南）に進みます。御堂筋に沿って，南に進んでください。</p>
				</div>
				<div class="access__item">
					<picture>
						<source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_06_sp.jpg">
						<img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_06.jpg" alt="" class="access__item-image" width="350" height="251">
					</picture>
					<p class="access__item-title">Step 06</p>
					<p class="access__item-text">「東梅田駅７番出口」から地上に出て，左（南）に進みます。御堂筋に沿って，南に進んでください。</p>
				</div>
			</div>
		</div>
	</section>







	<?php
	echo '</div>';
	?>

</main>
<!-- /.main -->

<?php get_footer(); ?>
