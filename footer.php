<footer class="footer">
    <div class="footer__contact">
        <h2 class="section__title">
            <em>Contact</em>
            <span>お問い合わせ</span>
        </h2>

        <p class="section__text is-center">
            <em class="footer__contact-label">初回30分相談無料</em>
            お気軽にお問い合わせ・ご相談ください。
        </p>

        <div class="footer__button-area">
            <a href="tel:072-627-0101" class="footer__button is-tel">
                <p><em>TEL</em>072-627-0101</p>
                <span>受付時間 9 : 00 - 18:00 (土日祝休)</span>
            </a>

            <a href="<?= home_url(); ?>/contact" class="footer__button is-mail">
                <p><em>メールでのお問い合わせはこちら</em></p>
            </a>
        </div>
    </div>

    <div class="footer__inner">
        <div class="footer__address">
            <a href="<?= home_url(); ?>" class="footer__logo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/logo_footer_sp.svg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="footer__logo-image" width="348" height="67">
                </picture>
            </a>

            <p class="footer__description pc-none">JR茨木駅徒歩2分 遺産相続・交通事故・離婚問題の法律相談</p>

            <address class="footer__address-zip">
                〒567-0032<br><a href="https://maps.app.goo.gl/JGktHu7LFDC4Vqxb9" target="_blank" rel="noopener noreferrer">大阪府茨木市西駅前町５番３６号 茨木高橋ビル８階東</a>
            </address>

            <address class="footer__address-tel">
                <span>TEL : <a href="tel:072-627-0101">072-627-0101</a></span>
                <span>FAX : 072-646-9439</span>
            </address>
        </div>

        <div class="footer__nav">
            <ul class="footer__nav-list">
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/about-us">弁護士紹介</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/service#anc-flow">ご契約の流れ</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/contact">お問い合わせ</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/service">取扱業務 一覧</a>
                </li>
                <?php if (has_topics_query()) : ?>
                    <li class="footer__nav-item">
                        <a href="<?= home_url(); ?>/topics">新着情報</a>
                    </li>
                <?php endif; ?>
                <?php /*
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/privacy#anc-site">サイトポリシー</a>
                </li>
                */ ?>
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/price">料金</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/office">事務所概要</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?= home_url(); ?>/privacy#anc-privacy">プライバシーポリシー</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer__bottom">
        <small class="footer__copyright">© 2024 Ibaraki Asahi Law Office.</small>
    </div>
</footer>


<?php if (is_home() || is_front_page()) : ?>
    <!-- <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script> -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>
