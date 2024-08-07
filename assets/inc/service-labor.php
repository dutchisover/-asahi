<?php

/**
 * Template Name: 労働問題
 * slug: labor
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
             * タイトルを取得して、全角「（」以降を除去
             */
            $title = get_the_title();
            $title = preg_replace('/（.*/u', '', $title);
            ?>
            <em class="font-gothic-medium"><?= $title; ?></em>
            <span class="font-gothic-medium"><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-labor_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-labor.jpg" alt="" class="page__mv-bg" width="1800" height="502">
        </picture>
    </div>
    <!-- /.page__mv -->

    <div class="breadcrumb">
        <div class="breadcrumb__inner">
            <a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
            <a href="<?php echo home_url(); ?>/service" class="breadcrumb__link">取り扱い業務一覧</a>
            <span class="breadcrumb__current"><?= get_the_title(); ?>について</span>
        </div>
    </div>
    <!-- /.breadcrumb -->
</div>

<main class="main page__main page__parent-service">
    <?php
    echo '<div class="page-' . esc_attr($slug) . '">';
    ?>

    <section class="section" data-section-title="Service 01">

        <p class="service__copy"><em>労務問題</em>にまつわる問題は<br class="pc-none">当事務所へお任せ下さい。<br><span>多数の解決実績に基づき、全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-labor-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-labor-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>サービス残業を強いられている</li>
                    <li>固定残業代制で適切に残業代の支払いがされているか不安</li>
                    <li>突然解雇をされてしまった</li>
                    <li>拒否しているのに執拗に退職勧奨を受けている</li>
                    <li>会社の指示どおりに作業する中で怪我をしてしまった</li>
                    <li>労災保険では賄われない損害を会社に請求したい</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>都内の総合法津事務所で多数の労働問題を解決した経験から、当事務所は特に<b class="fw-bold">残業代請求・不当解雇・労災</b>に注力しております。<br>ご依頼者様の状況を詳しくお伺いし、密に連絡をとりご要望をお伺いしながら、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>労働問題の取扱業務</span>
        </h2>

        <p class="section__copy">当事務所では、労働に関する各種問題を取り扱っております。<br>
            下記に列挙した取扱業務はその一例となります。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>残業代請求</em>
                </h3>
                <p class="service__field-text">「1日8時間、1週40時間」（法定労働時間）を超える労働、法定休日における労働（休日労働）、22時から5時までの深夜労働時間帯の労働（深夜労働）には残業代（割増賃金）を請求することができます。この残業代を適切に計算し、会社に請求を行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>不当解雇・雇止め</em>
                </h3>
                <p class="service__field-text">解雇されてしまった場合は、解雇理由に応じて取るべき対応が異なります。解雇が無効であれば原則として職場復帰を前提とした交渉を行いますが、実際には会社に解雇を撤回してもらった上で、金銭の補償を受けて合意退職するという解決もあり、ご希望に応じた対応が可能です。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>労災</em>
                </h3>
                <p class="service__field-text">劣悪な労働環境により、労働者が怪我をしたり、過労自殺をしてしまった場合、その原因が会社の業務にあるときには、労災（業務上災害）となり、労災保険法の適用を受けます。<br>
                    加えて、労働者のこれらの傷病へのり患が、会社の安全配慮義務違反に基づく場合は、労災保険では保障されない慰謝料等を請求することができます。</p>
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
                <span>労働問題に関する事例や記事</span>
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
                                <a href="<?php the_permalink(); ?>" class="archive__item-link no-arrow">
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
            <span>労働問題の弁護士費用 (全て税込表記)</span>
        </h2>

        <div class="service__price-nav">
            <!-- <a href="" class="service__price-nav-link"></a> -->
        </div>

        <div class="service__price-container">

            <!-- 01:相談料 -->
            <div class="service__price-box" id="anc-price-01">
                <?php service_price_title('相談料'); ?>
                <?php price_table_2col([
                    ['時間', '相談料'],
                    ['初回最初の30分', '0円'],
                    ['以後30分ごと', '5,500円'],
                ]); ?>
            </div>

            <!-- 02:残業代請求 -->
            <div class="service__price-box" id="anc-price-02">
                <?php service_price_title('残業代請求'); ?>
                <?php price_table_3col([
                    ['解決手段', '着手金', '報酬金'],
                    ['交渉', '0円', '33万円＋認容額の19.8％'],
                    ['労働審判', '22万円', '22万円＋認容額の26.4％'],
                    ['訴訟', '33万円<span>（労働審判から移行する場合は22万円）</span>', '認容額の33％<span>（最低44万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>「認容額」とは、和解や認容判決等で最終的に認められた相手方の支払額をいいます。</li>
                </ul>
            </div>

            <!-- 03:解雇・雇止め -->
            <div class="service__price-box" id="anc-price-03">
                <?php service_price_title('解雇・雇止め'); ?>
                <?php price_table_3col([
                    ['解決手段', '着手金', '報酬金'],
                    ['交渉', '22万円', '33万円＋認容額の19.8％'],
                    ['労働審判', '33万円<span>（交渉から移行する場合は22万円）', '22万円＋認容額の26.4％'],
                    ['訴訟', '44万円<span>（交渉から移行する場合は33万円、労働審判から移行する場合は22万円）</span>', '認容額の33％<span>（最低44万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>「認容額」とは、和解や認容判決等で最終的に認められた相手方の支払額をいいます。</li>
                </ul>
                <h4 class="service__price-subtitle">金銭換算できない場合の報酬金</h4>
                <?php price_table_1col([
                    '①交渉により復職することになった場合',
                    '給与支給月額の2か月分（年俸制の場合は年俸の6分の1）＋33万円<br>※相手方が解雇を撤回した場合、解雇の意思表示を否定した場合を含みます。
',
                ]); ?>
                <?php price_table_1col([
                    '②金銭の支払いなく合意退職扱いとする方法で和解した場合',
                    '44万円',
                ]); ?>
                <?php price_table_1col([
                    '③労働審判・訴訟により復職することになった場合または地位確認請求が認容された場合',
                    '給与支給月額の3か月分（年俸制の場合は年俸の4分の1）＋11万円<br>※相手方が解雇を撤回した場合、解雇の意思表示を否定した場合を含みます。',
                ]); ?>
            </div>

            <!-- 04:労働災害 -->
            <div class="service__price-box" id="anc-price-04">
                <?php service_price_title('労働災害'); ?>
                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '原則0円'],
                    ['労働審判', '33万円<span>（交渉から移行する場合は22万円）'],
                    ['訴訟', '44万円<span>（交渉から移行する場合は33万円、労働審判から移行する場合は22万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>交渉は原則として0円ですが、元受会社に対して請求を行う場合、保有個人情報開示請求を行う場合など困難な事案は22万円を上限として着手金を頂戴いたします。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金：会社に対して請求する場合</h4>
                <?php price_table_2col([
                    ['認容額', '料金'],
                    ['300万円以下', '認容額の22％（最低44万円）'],
                    ['300万円を超え3000万円以下', '認容額の19.8％＋6万6000円'],
                    ['3000万円を超える場合', '認容額の16.5％＋105万6000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、和解や認容判決等で最終的に認められた相手方の支払額をいいます。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金：労災保険から回収した場合</h4>
                <?php price_table_2col([
                    ['労災保険給付の種類', '料金'],
                    ['障害補償給付<br>（障害等級8～14級に認定された場合）', '給付額の2.2％（最低3万3000円）'],
                    ['障害補償給付<br>（障害等級1～7級に認定された場合）', '55万円'],
                    ['遺族補償給付（年金・一時金）<br>傷病補償年金', '55万円'],
                    ['その他の労災保険給付', '給付額の2.2％（最低3万3000円）'],
                ]); ?>
            </div>

            <!-- 退職勧奨への対応 -->
            <div class="service__price-box" id="anc-price-05">
                <?php service_price_title('退職勧奨への対応'); ?>
                <?php price_table_1col([
                    '着手金',
                    '22万円',
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>
                <?php price_table_1col([
                    '報酬金',
                    '1, 最後の退職勧奨から半年間退職勧奨がされなかった場合、給与支給月額の1か月分相当額（最低22万円）',
                    '2, 退職勧奨受け入れ金銭解決をした場合、和解額の19.8%（最低22万円）',
                ]); ?>
            </div>

            <!-- 退職代行（代理） -->
            <div class="service__price-box" id="anc-price-06">
                <?php service_price_title('退職代行（代理）'); ?>
                <?php price_table_1col([
                    '着手金',
                    '5万5000円',
                ]); ?>
                <?php price_table_1col([
                    '報酬金',
                    '1, 退職ができた場合、11万円',
                    '2, 300万円以下の経済的利益を得た場合、経済的利益の22％',
                    '3, 300万円を超える経済的利益を得た場合、経済的利益の16.5％＋16万6000円',
                ]); ?>
            </div>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->