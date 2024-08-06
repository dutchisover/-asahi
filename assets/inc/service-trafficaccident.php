<?php

/**
 * Template Name: 交通事故
 * slug: trafficaccident
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
            $title = preg_replace('/（.*/u', '', $title);
            ?>
            <em class="font-gothic-medium"><?= $title; ?></em>
            <span class="font-gothic-medium"><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-trafficaccident_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-trafficaccident.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

    <section class="section" data-section-title="Service 03">

        <p class="service__copy"><em>交通事故</em>にまつわる問題は当事務所にお任せ下さい。<br><span>「被害者側専門」の弁護士として、全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-trafficaccident-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-trafficaccident-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>保険会社とやりとりを自分で行うのが不安</li>
                    <li>慰謝料の適切な金額を知りたい</li>
                    <li>過失割合について納得がいなかい</li>
                    <li>保険会社から治療費の打ち切りをされた</li>
                    <li>適切な休業補償を受けたい</li>
                    <li>後遺障害の認定に不安がある</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>交通事故を豊富に取扱う都内の総合法律事務所に所属し、被害者側を中心に数多くの交通事故トラブルを解決してきた実績があります。特に交渉による早期解決には自信があります。ご依頼者様の状況を詳しくお伺いし、密に連絡をとりご要望をお伺いしながら、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>交通事故の取扱業務</span>
        </h2>

        <p class="section__copy">当事務所では、交通事故に関する各種問題を取り扱っております。<br>下記に列挙した取扱業務はその一例となります。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>示談交渉による慰謝料増額</em>
                </h3>
                <p class="service__field-text">交通事故の慰謝料額には3つの基準がありますが、保険会社が提示する額のほとんどは、最も低額な自賠責保険基準を基に計算されています。これを最も高額な基準である裁判基準で計算するよう交渉を行っていきます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>適切な過失割合の獲得</em>
                </h3>
                <p class="service__field-text">過失割合とは、事故が発生した責任が、当事者双方にどのくらいあるかを表す割合です。事故状況を詳しくお伺いし、場合によっては実況見分調書などを取り寄せ、適切な過失割合を主張していきます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>適切な後遺障害等級の獲得</em>
                </h3>
                <p class="service__field-text">もし治療が終了しても後遺症が残ってしまった場合は、「後遺障害等級認定」の申請をすることになります。認定時には専門機関による審査が行われるため、後遺障害等級の認定基準や審査の仕組みを踏まえ、適切な対策をする必要があります。通院方法や頻度、受けておくべき検査のアドバイスをいたします。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>休業補償の獲得</em>
                </h3>
                <p class="service__field-text">休業補償とは、交通事故が原因で仕事を休んでしまった場合、本来得られるはずだった収入に対する補償です。休業補償は、休業の必要性や基礎収入など争点が多いため、裁判例などを踏まえて適切に主張を組み立てる必要があります。</p>
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
                <span>交通事故に関する事例や記事</span>
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
            <span>交通事故の弁護士費用 (全て税込表記)</span>
        </h2>

        <!-- <div class="service__price-nav"></div> -->
        <div class="service__price-tab">
            <a href="#anc-price-01" class="service__price-tab-primary">弁護士費用特約に加入されている方</a>
            <a href="#anc-price-02" class="service__price-tab-secondary">弁護士費用特約に加入されていない方</a>
        </div>

        <div class="service__price-container">

            <!-- 弁護士費用特約に加入されている方 -->
            <div class="service__price-box" id="anc-price-01">
                <?php service_price_title('弁護士費用特約に加入されている方', false); ?>
                <p class="service__price-text">弁護士費用特約に加入されている方は、<b class="fw-bold">ほとんどの場合、自己負担なく</b>ご相談・ご依頼が可能です。</p>

                <div class="service__price-faq">
                    <div class="service__price-faq-image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-trafficaccident-02.jpg" alt="" class="" width="368" height="230">
                    </div>
                    <dl class="service__price-faq-body">
                        <dt class="service__price-faq-title">Q.弁護士費用特約とは？</dt>
                        <dd class="service__price-faq-text">主に自動車保険に付帯しているオプションです。交通事故について弁護士に依頼する際、弁護士費用の全部又は一部の補償を受ける事ができます。</dd>
                        </di>
                </div>
                <p class="service__price-text">弁護士費用特約に加入されている方の料金は以下のとおりとなります。</p>
                <p class="service__price-text text-sm">※弁護士費用特約から費用の支払いがされるため、補償限度の範囲内であればご自身の負担はございません。</p>


                <?php service_price_title('相談料', true, false); ?>
                <?php price_table_2col([
                    ['時間', '相談料'],
                    ['30分ごと', '5,500円'],
                ]); ?>

                <?php service_price_title('着手金', true, false); ?>

                <h4 class="service__price-subtitle">交渉</h4>
                <?php price_table_1col([
                    '最初に頂戴する金額',
                    '110,000円',
                ]); ?>

                <p class="service__price-text">相手方に請求する金額が確定した後、以下の追加着手金を頂戴いたします。</p>

                <?php price_table_2col([
                    ['確定請求額', '追加着手金'],
                    ['125万円を超え300万円以下', '確定請求額の8.8%－110,000円'],
                    ['300万円を超え3000万円以下', '確定請求額の5.5%＋99,000円－110,000円'],
                    ['3000万円を超え3億円以下', '確定請求額の3.3%＋759,000円－110,000円'],
                    ['3億円を超える場合', '確定請求額の2.2% ＋4,059,000円－110,000円'],
                ]); ?>

                <h4 class="service__price-subtitle">ADR</h4>
                <p class="bg-gray">交渉の着手金の金額に2分の1を加算した金額</p>

                <h4 class="service__price-subtitle">訴訟</h4>
                <p class="bg-gray">交渉の着手金の金額に2分の1を加算した金額</p>

                <?php service_price_title('報酬金', true, false); ?>
                <?php price_table_2col([
                    ['回収額', '料金'],
                    ['125万円以下の場合', '220,000円'],
                    ['125万円を超え300万円以下', '回収額の17.6%'],
                    ['300万円を超え3000万円以下', '回収額の11% + 198,000円'],
                    ['3000万円を超え3億円以下', '回収額の6.6% + 1,518,000円'],
                    ['3億円を超える場合', '回収額の4.4% + 8,118,000円'],
                ]); ?>
            </div>

            <!-- 弁護士費用特約に加入されていない方 -->
            <div class="service__price-box" id="anc-price-02">
                <?php service_price_title('弁護士費用特約に加入されていない方', false); ?>

                <?php service_price_title('相談料', true, false); ?>
                <?php price_table_2col([
                    ['時間', '相談料'],
                    ['初回最初の30分', '0円'],
                    ['以後30分ごと', '5,500円'],
                ]); ?>

                <?php service_price_title('着手金', true, false); ?>
                <p class="service__price-text">当事務所では、弁護士費用特約に加入されていない場合でも、交渉は原則として着手金無料とさせていただいております。</p>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '0円<span>（相手方に任意保険会社がついている場合）</span>'],
                    ['ADR', '220,000円'],
                    ['訴訟', '330,000円<span>（ADRから訴訟に移行する場合は220,000円）</span>'],
                ]); ?>
                <p class="service__price-text">※相手方に任意保険会社がついていない場合は、交渉段階であっても【弁護士費用特約に加入されている場合】と同じ基準となります。</p>

                <?php service_price_title('報酬金', true, false); ?>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '回収金額の11％＋220,000円'],
                    ['ADR', '回収金額の11％＋220,000円'],
                    ['訴訟', '回収金額の11％＋220,000円'],
                ]); ?>

            </div>
        </div>
    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->