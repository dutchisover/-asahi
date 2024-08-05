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
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-price_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-price.jpg" alt="PRICE 料金一覧" class="page__mv-bg" width="1800" height="502">
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

    <section class="section">
        <p class="section__copy">安心してご相談・ご依頼いただくため、わかりやすい料金体系にしております。法律相談料も初回３０分は無料です。<br class="sp-none">来所予約の際にも費用の説明をいたします。</p>
    </section>


    <section class="section" data-section-title="cost type">
        <div class="cost-type">
            <h2 class="section__title font-reverse">
                <em>弁護士費用の種類</em>
                <span>Cost type</span>
            </h2>
            <div class="cost-type__container">
                <h3 class="cost-type__title">法律相談料</h3>
                <table class="cost-type__table">
                    <thead>
                        <tr>
                            <th>時間</th>
                            <th>相談料</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>初回最初の30分</td>
                            <td>0円</td>
                        </tr>
                        <tr>
                            <td>以後30分ごと</td>
                            <td>5,500円</td>
                        </tr>
                    </tbody>
                </table>
                <p class="cost-type__note">当事務所では、電話やメールでの法律相談は原則として行っておりません。（法律顧問は除く）</li>
                </p>

                <div class="cost-type__list">
                    <div class="cost-type__item">
                        <picture>
                            <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_price_01_sp.jpg">
                            <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_price_01.jpg" alt="着手金" class="cost-type__item-image">
                        </picture>
                        <div class="cost-type__item-content">
                            <h4 class="cost-type__item-title">着手金</h4>
                            <p class="cost-type__item-text">事件着手時に発生する費用のことで、事件の結果によって金額が変わることがない費用です。結果にかかわらず、事件着手後は返金されない費用となります。</p>
                        </div>
                    </div>
                    <div class="cost-type__item">
                        <picture>
                            <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_price_02_sp.jpg">
                            <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_price_02.jpg" alt="報酬金" class="cost-type__item-image">
                        </picture>
                        <div class="cost-type__item-content">
                            <h4 class="cost-type__item-title">報酬金</h4>
                            <p class="cost-type__item-text">事件の解決時に発生する費用のことで、事件の結果によって報酬金は変わります。
                            </p>
                        </div>
                    </div>
                    <div class="cost-type__item">
                        <picture>
                            <source media="(max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_price_03_sp.jpg">
                            <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_price_03.jpg" alt="実費・日当・手数料" class="cost-type__item-image">
                        </picture>
                        <div class="cost-type__item-content">
                            <h4 class="cost-type__item-title">実費・日当・手数料</h4>
                            <p class="cost-type__item-text">実費は、交通費や郵便切手代等実際にかかった費用です。裁判所等に出向いた場合に発生する日当や戸籍等の取得を弁護士に依頼をした場合の取得手数料があります。詳細は、面談の際にご説明いたします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price-category">
            <h2 class="section__title font-reverse">
                <em>分野ごとの弁護士費用について</em>
            </h2>
            <p class="section__copy">安心してご相談・ご依頼いただくため、わかりやすい料金体系にしております。<br class="pc-none">法律相談料も初回３０分は無料です。<br>来所予約の際にも費用の説明をいたします。</p>
            <div class="price-category__container">
                <ul class="price-category__list">
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/family#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">遺産相続・遺言</h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/labor#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">労働<span class="sp-none">（残業代請求・解雇・労災）</span></h3>
                        </a>
                    </li>
                    <li class=" price-category__item">
                        <a href="<?php echo home_url(); ?>/service/traffic-accident#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">交通事故<span>（被害者側）</span></h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/divorce#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">離婚・男女問題</h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/corporate-adviser#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">会社顧問</h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/realestate#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">不動産</h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/debt#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">借金・債務整理</h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/money#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">金銭トラブル<br class="pc-none"><span class="sp-none">（請求側／被請求側）</span><span class="pc-none">請求側／被請求側</span></h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/detective#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">刑事</h3>
                        </a>
                    </li>
                    <li class="price-category__item">
                        <a href="<?php echo home_url(); ?>/service/company#anc-price" class="price-category__item-link">
                            <h3 class="price-category__item-title">法人破産・会社解散</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>







    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->

<?php get_footer(); ?>