<footer class="footer">
	<div class="footer__contact">
		<h2 class="section__title">
			<em>Contact</em>
			<span>お問い合わせ</span>
		</h2>

		<p class="section__text is-center">
			<em class="section__subtitle is-center">初回30分相談無料</em>
			お急ぎの方は、お電話でのご相談もお待ちしております。<br>まずはお気軽にお問い合わせください。
		</p>

		<div class="footer__button-area">
			<a href="" class="footer__button is-tel">
				<p><em>TEL</em>06-6599-8617</p>
				<span>受付時間 10:00 - 18:00 (土日祝休)</span>
			</a>

			<a href="" class="footer__button is-mail">
				<p><em>メールでのお問い合わせはこちら</em></p>
			</a>
		</div>
	</div>

	<div class="footer__inner">
		<div class="footer__address">
			<a href="<?= home_url(); ?>" class="footer__logo">
				<img src="<?= get_template_directory_uri(); ?>/image/logo.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="footer__logo-image" width="" height="">
			</a>

			<address class="footer__address-zip">
				〒604-8151<br>京都府京都市中京区橋弁慶町222ヒライビル5階
			</address>

			<address class="footer__address-tel">
				<span>TEL : 06-6599-5617</span>
				<span>FAX : 06-6599-5617</span>
			</address>
		</div>

		<div class="footer__nav">
			<ul class="footer__nav-list">
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/about">私たちについて</a>
				</li>
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/service#anc-flow">ご相談の流れ</a>
				</li>
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/contact">お問い合わせ</a>
				</li>
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/service">取り扱い業務 一覧</a>
				</li>
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/topics">新着情報</a>
				</li>
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/privacy">プライバシーポリシー</a>
				</li>
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/price">料金</a>
				</li>
				<li class="footer__nav-item">
					<a href="<?= home_url(); ?>/office">事務所概要</a>
				</li>

			</ul>
		</div>
	</div>

	<div class="footer__bottom">
		<small class="footer__copyright">© 2019-2024 Ibawaki Asahi Law Offices</small>
	</div>
</footer>


<?php wp_footer(); ?>
</body>

</html>
