<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<div class="page__header">
    <div class="page__mv">
        <h1 class="page__title" data-fade="0">
            <em><?= get_the_title(); ?></em>
            <span><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-office_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-office.jpg" alt="Office 事務所のご案内" class="page__mv-bg" width="1800" height="502">
        </picture>
    </div>
    <!-- /.page__mv -->

    <div class="breadcrumb" data-fade="100">
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
            <h2 class="section__title" data-fade="200">
                <em>our office</em>
                <span>事務所概要</span>
            </h2>

            <div class="swiper" id="office__swiper" data-fade="300">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="office__item">
                            <picture>
                                <source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_02_sp.jpg?01" media="(max-width: 820px)" />
                                <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_02.jpg?01" alt="" width="900" height="374" />
                            </picture>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="office__item">
                            <picture>
                                <source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_01_sp.jpg?01" media="(max-width: 820px)" />
                                <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_01.jpg?01" alt="" width="900" height="374" />
                            </picture>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="office__item">
                            <picture>
                                <source srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_04_sp.jpg?01" media="(max-width: 820px)" />
                                <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-slide_04.jpg?01" alt="" width="900" height="374" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="office__data-list" data-fade="100">
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
                    <dd class="office__data-content">弁護士　谷井 光</dd>
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
                    <dd class="office__data-content">TEL　072-627-0101　　　　<br class="pc-none">FAX　072-646-9439
                    </dd>
                </dl>
                <dl class="office__data-item">
                    <dt class="office__data-title">営業時間</dt>
                    <dd class="office__data-content">平日 9:00-18:00</dd>
                </dl>
            </div>
        </div>
    </section>

    <section class="section" data-section-title="access" id="anc-access">
        <h2 class="section__title" data-fade="100">
            <em>Access</em>
            <span>アクセス</span>
        </h2>
        <p class="section__copy" data-fade="200">ＪＲ茨木駅（西口）から徒歩２分<br>
            お車でお越しの方は近隣パーキング（事務所から徒歩１分）をご利用ください</p>
        <div class="access__container">
            <div class="access__map" data-fade="300"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.5800663594778!2d135.5612627!3d34.8165054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e32af0b51883%3A0xe1ec4407f263e867!2z44CSNTY3LTAwMzIg5aSn6Ziq5bqc6Iyo5pyo5biC6KW_6aeF5YmN55S677yV4oiS77yT77yW!5e0!3m2!1sja!2sjp!4v1722154206295!5m2!1sja!2sjp" width="1152" height="486" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <h3 class="section__title" data-fade="100">
                <em class="font-gothic-medium">JR茨木駅からの道順</em>
                <span>Directions</span>
            </h3>
            <div class="access__list">
                <div class="access__item" data-fade="200">
                    <picture>
                        <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_01_sp.jpg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_01.jpg" alt="" class="access__item-image" width="350" height="251">
                    </picture>

                    <p class="access__item-title">Step 01</p>
                    <p class="access__item-text">西口を右に曲がります。</p>

                </div>
                <div class="access__item" data-fade="300">
                    <picture>
                        <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_02_sp.jpg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_02.jpg" alt="" class="access__item-image" width="350" height="251">
                    </picture>
                    <p class="access__item-title">Step 02</p>
                    <p class="access__item-text">階段を下りずに歩道橋を突き当りまで直進します。</p>
                </div>
                <div class="access__item" data-fade="400">
                    <picture>
                        <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_03_sp.jpg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_03.jpg" alt="" class="access__item-image" width="350" height="251">
                    </picture>
                    <p class="access__item-title">Step 03</p>
                    <p class="access__item-text">歩道橋の突き当りまで来たら、右の階段を下ります。</p>
                </div>
                <div class="access__item" data-fade="500">
                    <picture>
                        <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_04_sp.jpg?01">
                        <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_04.jpg?01" alt="" class="access__item-image" width="350" height="251">
                    </picture>
                    <p class="access__item-title">Step 04</p>
                    <p class="access__item-text">階段を下りると目の前に茨木高橋ビルがあります。</p>
                </div>
                <div class="access__item" data-fade="600">
                    <picture>
                        <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_05_sp.jpg?01">
                        <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_office-access_05.jpg?01" alt="" class="access__item-image" width="350" height="251">
                    </picture>
                    <p class="access__item-title">Step 05</p>
                    <p class="access__item-text">当事務所は茨木高橋ビルの８階東です。エレベーターをご利用ください。</p>
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
