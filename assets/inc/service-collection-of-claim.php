<?php

/**
 * Template Name: 金銭トラブル
 * slug: collection-of-claim
 */

$file_path = get_template_directory() . '/assets/inc/inc-service-parts.php';
if (file_exists($file_path)) {
    include($file_path);
}

// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<div class="page__header">
    <div class="page__mv">
        <h1 class=" page__title">
            <?php
            /**
             * タイトルを取得して、「（」以降を除去
             */
            $title = get_the_title();
            $title = preg_replace('/\s\(.+?\)/', '', $title);
            ?>
            <em class="font-gothic-medium"><?= $title; ?></em>
            <span class="font-gothic-medium"><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-collection-of-claim_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-collection-of-claim.jpg" alt="" class="page__mv-bg" width="1800" height="502">
        </picture>
    </div>
    <!-- /.page__mv -->

    <div class="breadcrumb">
        <div class="breadcrumb__inner">
            <a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
            <a href="<?php echo home_url(); ?>/service" class="breadcrumb__link">取扱業務一覧</a>
            <span class="breadcrumb__current"><?= get_the_title(); ?>について</span>
        </div>
    </div>
    <!-- /.breadcrumb -->
</div>

<main class="main page__main page__parent-service">
    <?php
    echo '<div class="page-' . esc_attr($slug) . '">';
    ?>

    <section class="section" data-section-title="Service 08">

        <p class="service__copy"><em>金銭トラブル</em>にまつわる問題は<br class="pc-none">当事務所へお任せ下さい。<br><span>多数の解決実績に基づき、全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-collection-of-claim-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-collection-of-claim-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <h3 class="service__example-title">個人のお客様</h3>
                <ul class="service__example-list">
                    <li>貸した／預けたお金を返してくれない</li>
                    <li>書面で慰謝料の支払いを合意したのに払ってくれない</li>
                    <li>不当で高額な慰謝料請求を受けている</li>
                </ul>
                <h3 class="service__example-title">法人のお客様</h3>
                <ul class="service__example-list">
                    <li>取引先が売掛金を払ってくれない</li>
                    <li>取引先から不当な損害賠償請求を受けている</li>
                    <li>勝訴判決を得たのに支払いがされない</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>当事務所は、貸金返還請求、売掛金回収、損害賠償請求を受けた場合の対応、民事保全（仮差押え・仮処分）、強制執行等、債権回収（金銭トラブル）に幅広く対応しております。ご依頼者様の状況を詳しくお伺いし、密に連絡をとりご要望をお伺いしながら、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>金銭トラブルの取扱い業務</span>
        </h2>

        <p class="section__copy">当事務所では、金銭トラブルに関する各種問題を取り扱っております。<br>下記に列挙した取扱業務はその一例となります。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>債権回収</em>
                </h3>
                <p class="service__field-text">代金の支払いをしない取引先や貸金の返還しない債務者等に対する債権回収の交渉、訴訟の代理等を行います。弁護士名で内容証明郵便等を送るだけで支払いがされることも少なくないため、弁護士を利用するメリットが大きな分野です。<br>相手方との紛争が訴訟に発展した場合にも、迅速な解決、円満な解決、徹底抗戦など、ご要望に応じて対応します。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>強制執行</em>
                </h3>
                <p class="service__field-text">強制執行は、勝訴判決を得たり、相手方との間で裁判上の和解が成立したにもかかわらず、相手方が任意の履行をしない場合に、裁判所を通じて権利を強制的に実現する手続です。<br>相手方の財産調査から実際の強制執行まで一貫してサポートが可能です。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>民事保全</em>
                </h3>
                <p class="service__field-text">訴訟は、その訴えの提起から判決の確定まで早くても数か月以上かかり、相当の時間を要します。その間に債務者の財産状態等が変化し、せっかく勝訴判決を得ても強制執行をすることができないという事態が生じます。<br>そこで、将来の強制執行をするための準備として、訴訟を提起する前などに、相手方の財産を予め確保する手続が仮差押えや仮処分などの民事保全です。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>請求された側にも対応</em>
                </h3>
                <p class="service__field-text">当事務所は、お金の請求を行う側だけでなく、請求された側の弁護にも対応しています。不当な慰謝料やいわれのない損害賠償請求を受けた場合はぜひご相談ください。</p>
            </div>
        </div>
    </section>

    <?php
    if (wp_is_mobile()) {
        //スマホ・タブレットの時
        $num = 3;
    } else {
        //PCの時
        $num = 3;
    }
    // ページのスラッグを取得
    $slug = get_post_field('post_name', get_post());
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'topics',
        'posts_per_page' => $num,
        'paged' => $paged,
        'tax_query' => array(
            array(
                'taxonomy' => 'topics_taxonomy',
                'field' => 'slug',
                'terms' => $slug,
            ),
        ),
    );
    $topics_query = new WP_Query($args);
    if ($topics_query->have_posts()) : ?>
        <section class="section" data-section-title="case study">
            <h2 class="section__title">
                <em>case study</em>
                <span>金銭トラブルに関する事例や記事</span>
            </h2>

            <div class="service__case">
                <div class="archive__container">
                    <ul class="archive__list">
                        <?php
                        while ($topics_query->have_posts()) : $topics_query->the_post();

                            // カスタムタクソノミーの取得
                            $terms = get_the_terms(get_the_ID(), 'topics_taxonomy');

                            // アイキャッチ画像の取得
                            $archive_image = '';
                            if (has_post_thumbnail()) {
                                $archive_image = get_the_post_thumbnail($post->ID, 'fullsize', ['alt' => get_the_title()]);
                            } else {
                                $archive_image = '<img src="' . esc_url(get_template_directory_uri()) . '/assets/image/logo_footer_sp.svg" alt="" class="archive__item-noimage">';
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
                            <li class="archive__item">
                                <a href="<?php the_permalink(); ?>" class="archive__item-link">
                                    <div class="archive__item-image">
                                        <?php echo $archive_image; ?>
                                    </div>
                                    <div class="archive__item-content">
                                        <p class="archive__item-date">
                                            <time datetime="<?php echo get_the_date('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                                            <span class="archive__item-taxonomy <?php echo esc_attr($taxonomy_class); ?>">
                                                <?php echo esc_html($taxonomy_name); ?>
                                            </span>

                                        </p>

                                        <h2 class="archive__item-title"><?php the_title(); ?></h2>

                                        <p class="archive__item-text sp-none"><?php echo esc_html($content); ?></p>
                                    </div>
                                </a>
                            </li>
                            <!-- /.archive__item -->
                        <?php endwhile; ?>
                    </ul>
                    <!-- /.archive__list -->

                </div>
            </div>

            <?php
            // カスタムタクソノミーの一覧ページへのリンクを表示
            $taxonomy_link = get_term_link($slug, 'topics_taxonomy');
            if (!is_wp_error($taxonomy_link)) :
            ?>
                <div class="service__case-button">
                    <a href="<?php echo esc_url($taxonomy_link); ?>">関連記事を見る</a>
                </div>
            <?php
            endif;
            ?>

        </section>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <section class="section" data-section-title="Price of Service" id="anc-price">
        <h2 class="section__title">
            <em>price</em>
            <span>金銭トラブルの弁護士費用 (全て税込表記)</span>
        </h2>

        <div class="service__price-nav">
            <!-- <a href="" class="service__price-nav-link"></a> -->
        </div>

        <div class="service__price-container">
            <div class="service__price-box">
                <?php service_price_title('相談料'); ?>
                <?php price_table_2col([
                    ['時間', '相談料'],
                    ['初回最初の30分', '0円'],
                    ['以後30分ごと', '5,500円'],
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('和解交渉<span>（請求側・被請求側）</span>'); ?>

                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['請求金額', '料金'],
                    ['300万円以下', '16.5万円'],
                    ['300万円を超え<br>3000万円以下', '3.3% ＋ 6万6000円'],
                    ['3000万円を超え<br>3億円以下', '2.2% ＋ 39万6000円'],
                    ['3億円を超える場合', '1.1% ＋ 369万6000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。
                    </li>
                </ul>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['認容額', '料金'],
                    ['300万円以下', '認容額の22％<br>（最低33万円）'],
                    ['300万円を超え<br>3000万円以下', '認容額の13.2% + 26万4000円'],
                    ['3000万円を超え<br>3億円以下', '認容額の8.8% + 158万4000円'],
                    ['3億円を超える場合', '認容額の4.4% + 1478万4000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、最終的に和解や認容判決等で認められた相手方の支払額（請求側）または請求を減額した額（請求された側）をいいます。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('訴訟<span>（請求側・被請求側）</span>'); ?>

                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['請求金額', '料金'],
                    ['300万円以下', '請求額の11％<br>（最低26万4000円）'],
                    ['300万円を超え<br>3000万円以下', '6.6% ＋ 13万2000円'],
                    ['3000万円を超え<br>3億円以下', '4.4% ＋ 79万2000円'],
                    ['3億円を超える場合', '2.2% ＋ 739万2000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。
                    </li>
                </ul>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['認容額', '料金'],
                    ['300万円以下', '認容額の22％<br>（最低33万円）'],
                    ['300万円を超え<br>3000万円以下', '認容額の13.2% + 26万4000円'],
                    ['3000万円を超え<br>3億円以下', '認容額の8.8% + 158万4000円'],
                    ['3億円を超える場合', '認容額の4.4% + 1478万4000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、最終的に和解や認容判決等で認められた相手方の支払額（請求側）または請求を減額した額（請求された側）をいいます。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('支払督促<span>（請求側・被請求側）</span>'); ?>

                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_1col([
                    '着手金',
                    '16万5000円',
                ]); ?>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['認容額', '料金'],
                    ['500万円以下', '認容額の22％<br>（最低33万円）'],
                    ['500万円を超え<br>5000万円以下', '認容額の16.5% + 27万5000円'],
                    ['5000万円を超える場合', '認容額の1.1% + 302万5000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、最終的に和解や認容判決等で認められた相手方の支払額（請求側）または請求を減額した額（請求された側）をいいます。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('民事保全<span>（仮差押え・仮処分）</span>'); ?>

                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['訴訟の着手金の額の<br class="pc-none">2分の１', '・審問又は口頭弁論を経たとき、<br class="sp-none">訴訟の報酬金の額の3分の1<br><br>・本案の目的を達したとき、<br class="sp-none">訴訟の報酬金と同額'],
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('強制執行'); ?>

                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['執行額', '料金'],
                    ['300万円以下', '請求額の5.5％<br>（最低11万円）'],
                    ['300万円を超え<br>3000万円以下', '請求額の3.3%＋6万6000円'],
                    ['3000万円を超え<br>3億円以下', '請求額の2.2%＋39万6000円'],
                    ['3億円を超える場合', '請求額の1.1%＋369万6000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。
                    </li>
                </ul>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['回収金額', '料金'],
                    ['300万円以下', '回収金額の1.1％<br>（最低22万円）'],
                    ['300万円を超え<br>3000万円以下', '回収金額の6.6%＋13万2000円'],
                    ['3000万円を超え<br>3億円以下', '回収金額の4.4%＋79万2000円'],
                    ['3億円を超える場合', '回収金額の2.2%＋739万2000円'],
                ]); ?>
            </div>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->
