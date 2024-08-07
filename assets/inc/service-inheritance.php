<?php

/**
 * Template Name: 遺産相続・遺言
 * slug: inheritance
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
        <h1 class="page__title">
            <?php
            /**
             * タイトルを取得して、「（」以降を除去
             */
            $title = get_the_title();
            $title = preg_replace('/（.*/u', '', $title);
            ?>
            <em class="font-gothic-medium"><?= $title; ?></em>
            <span class="font-english fw-medium"><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-inheritance_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-inheritance.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

    <section class="section" data-section-title="Service 02">

        <p class="service__copy"><em>遺産相続・遺言</em>にまつわる問題は<br class="pc-none">当事務所へお任せ下さい。<br><span>多数の解決実績に基づき、全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-inheritance-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-inheritance-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>遺産分割の協議がまとまらない（特別受益、寄与分、葬儀費用等）</li>
                    <li>遺産を独り占めする相続人がおり、遺留分が侵害されている</li>
                    <li>遺産である不動産の分割方法／評価額で揉めている</li>
                    <li>「遺言書」を残したい／書き換えたい</li>
                    <li>作成した遺言書をしっかり実行してもらいたい</li>
                    <li>亡くなった方の借金を相続したくない（相続放棄）</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>かつて所属していた都内の法律事務所は、都内２３区内で高齢者人口が上位の葛飾区に位置しており、遺産相続問題に注力しておりました。一癖も二つ癖もある遺産分割協議・調停、遺留分の請求／減額交渉、遺言書の作成、遺言執行等、多数の遺産相続問題を解決してきました。ご依頼者様の状況を詳しくお伺いし、密に連絡をとりご要望をお伺いしながら、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>遺産相続・遺言の取扱業務</span>
        </h2>

        <p class="section__copy">当事務所では、遺産相続・遺言に関する各種問題を取り扱っております。<br>下記に列挙した取扱業務はその一例となります。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>遺産分割手続</em>
                </h3>
                <p class="service__field-text">当事者同士だけでは話し合いがまとまらない場合に、弁護士が代理人となり、<br>他の相続人と任意交渉・調停・審判・裁判などを行います。<br>どの手続を選択すべき方は遺産の内容や他の相続人の態度などを踏まえて個別に判断します。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>遺留分侵害額請求</em>
                </h3>
                <p class="service__field-text">特定の相続人にすべての財産を相続させる旨の遺言がある場合であっても､他の相続人は､民法所定の最低限の取分が保障されています。これを遺留分といい、侵害された遺留分に相当する金額を請求することができます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>公正証書遺言作成</em>
                </h3>
                <p class="service__field-text">自らの死後、遺された相続人が遺産を巡って揉めることを防止したり、自らが希望する人に財産を遺すためには遺言書を作成することが一番の解決策です。当事務所は、遺言書の中でも遺言無効のリスクが低い公正証書遺言をお勧めしています。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>相続放棄</em>
                </h3>
                <p class="service__field-text">被相続人のプラスの財産よりもマイナスの財産の方が多いような場合には、相続放棄を行うべきです。相続放棄は、自らが相続人になったことを知ったときから３か月以内に、家庭裁判所において相続放棄の申述を行う必要があります。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 05</span>
                    <em>成年後見の申立て</em>
                </h3>
                <p class="service__field-text">認知症などで判断能力が不十分な方が、契約を行ったり、遺産分割協議を行ったりする場合には、本人の代わりとなる成年後見人を選任する必要があります。成年後見人の選任の申立ては家庭裁判所に行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 06</span>
                    <em>不在者財産管理人の選任</em>
                </h3>
                <p class="service__field-text">相続人の中に行方不明者がいる場合、遺産分割協議を行うためには、その行方不明者に代わって財産を管理する「不在者財産管理人」が必要となります。不在者財産管理人は、家庭裁判所によって専任され、不在者財産管理人は、財産を管理するほか、家庭裁判所の許可を得た上で、不動産の売却等を行うこともできます。</p>
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
                <span>遺産相続・遺言に関する事例や記事</span>
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
            <span>遺産相続・遺言の弁護士費用 (全て税込表記)</span>
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

            <!-- 02:遺産分割 -->
            <div class="service__price-box" id="anc-price-02">
                <?php service_price_title('遺産分割'); ?>

                <p class="service__price-text">日本弁護士連合会（旧）報酬基準や多くの法律事務所では、着手金が遺産の額に応じて設定されております。<br>そのため、遺産に不動産が含まれる場合などは着手金が非常に高額になる場合や、遺産が確定するまで着手金も確定しない場合があります。<br>そこで、当事務所では着手金の額を固定とすることで、ご依頼いただきやすい料金設定となっております。</p>

                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['協議（交渉）', '22万円'],
                    ['調停・審判', '33万円<span>（協議から移行する場合は22万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>遺産分割は、前提問題として、相続人・遺産範囲等の確認訴訟の提起を要する場合があります。その場合の弁護士費用は、着手金33万円、基礎報酬33万円を基本とし、経済的利益が発生した場合は遺産分割の報酬基準に準じて決定します。</li>
                    <li>相続財産の調査のみは、着手金11万円、報酬金０円となります。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['遺産取得金額', '料金',],
                    ['300万円以下', '遺産取得額の22％（最低44万円）'],
                    ['300万円を超え1500万円以下', '遺産取得額の19.8％＋11万円'],
                    ['1500万円を超え3000万円以下', '遺産取得額の16.5％＋77万円'],
                    ['3000万円を超え3億円以下', '遺産取得額の11％＋242万円'],
                    ['3億円を超える場合', '遺産取得額の6.6％＋1562万円'],
                ]); ?>

                <ul class="service__price-list">
                    <li>遺産取得額の計算は、時価額にて実施いたします。<br>不動産や株式等の時価の算定に評価を伴う遺産は、相手方との合意額を時価の基準とし、相手方との間で明確に決定しなかった場合には最終的に獲得した時点の市場価格を基準とした時価を基準とします。</li>
                    <li>遺産取得金額は、相続人お一人ごとに計算します。</li>
                </ul>
            </div>

            <!-- 03:遺留分侵害額請求（遺留分減殺請求） -->
            <div class="service__price-box" id="anc-price-03">
                <?php service_price_title('遺留分侵害額請求<span>（遺留分減殺請求）</span>'); ?>
                <h4 class="service__price-subtitle">請求側 : 着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '22万円'],
                    ['調停', '33万円<span>（交渉から移行する場合は22万円）</span>'],
                    ['訴訟', '44万円<span>（交渉・調停から移行する場合は33万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>

                <h4 class="service__price-subtitle">請求側 : 報酬金</h4>
                <?php price_table_2col([
                    ['認容額', '料金'],
                    ['300万円以下', '認容額の22％（最低44万円）'],
                    ['300万円を超え1500万円以下', '認容額の19.8％＋11万円'],
                    ['1500万円を超え3000万円以下', '認容額の16.5％＋77万円'],
                    ['3000万円を超え3億円以下', '認容額の11％＋242万円'],
                    ['3億円を超える場合', '認容額の6.6％＋1562万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、和解や認容判決等で最終的に認められた相手方の支払額をいいます。</li>
                    <li>不動産や株式等の時価の算定に評価を伴う遺産は、相手方との合意額を時価の基準とし、相手方との間で明確に決定しなかった場合には最終的に獲得した時点の市場価格を基準とした時価を基準とします。</li>
                </ul>

                <h4 class="service__price-subtitle">被請求側 : 着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '33万円'],
                    ['調停', '44万円<span>（交渉から移行する場合は33万円）</span>'],
                    ['訴訟', '44万円<span>（交渉・調停から移行する場合は33万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>

                <h4 class="service__price-subtitle">被請求側 : 報酬金</h4>
                <?php price_table_2col([
                    ['認容額', '料金'],
                    ['300万円以下', '認容額の22％（最低44万円）'],
                    ['300万円を超え1500万円以下', '認容額の19.8％＋11万円'],
                    ['1500万円を超え3000万円以下', '認容額の16.5％＋77万円'],
                    ['3000万円を超え3億円以下', '認容額の11％＋242万円'],
                    ['3億円を超える場合', '認容額の6.6％＋1562万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、最終的に減額できた財産の合計額をいいます。</li>
                    <li>不動産や株式等の時価の算定に評価を伴う遺産は、相手方との合意額を時価の基準とし、相手方との間で明確に決定しなかった場合には最終的に獲得した時点の市場価格を基準とした時価を基準とします。</li>
                    <li>
                        相手方から明確な遺留分侵害額の主張がなく、認容額の算定できない場合は、最終取得遺産額(遺言、遺贈、生前贈与、死因贈与、遺産分割等により取得した財産から遺留分侵害額請求者に対して交付した財産を控除した額)に応じて次のとおり算定します。
                        <ul>
                            <li>最終取得遺産額が１億円以下の場合：同額の3.3％（最低66万円）</li>
                            <li>最終取得遺産額が１億円を超える場合：同額の2.2％</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- 04:不当利得返還請求（請求側・被請求側） -->
            <div class="service__price-box" id="anc-price-04">
                <?php service_price_title('不当利得返還請求<span>（請求側・被請求側）</span>'); ?>

                <p class="service__price-text">日本弁護士連合会（旧）報酬基準や多くの法律事務所では、着手金が遺産の額に応じて設定されております。<br>そのため、遺産に不動産が含まれる場合などは着手金が非常に高額になる場合や、遺産が確定するまで着手金も確定しない場合があります。<br>そこで、当事務所では着手金の額を固定とすることで、ご依頼いただきやすい料金設定となっております。</p>

                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '33万円'],
                    ['訴訟', '55万円<span>（交渉から移行する場合は33万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['認容額', '料金'],
                    ['300万円以下', '認容額の22％（交渉は最低44万円、訴訟は最低66万円）'],
                    ['300万円を超え3000万円以下', '認容額の11％＋33万円'],
                    ['3000万円を超え3億円以下', '認容額の6.6％＋165万円'],
                    ['3億円を超える場合', '認容額の4.4％＋825万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、最終的に和解や認容判決等で認められた相手方の支払額（請求側）または請求を減額した額（請求された側）をいいます。</li>
                    <li>「減額した額」とは、相手方の最大請求額と和解や認容判決等で認められた額の差額をいい、相手方の請求額が明確ではない場合は、合理的に算出される相手方請求し得る最大値を相手方請求額として算定します。</li>
                </ul>
            </div>

            <!-- 05:遺言無効確認（確認する側・確認される側） -->
            <div class="service__price-box" id="anc-price-05">
                <?php service_price_title('遺言無効確認<span>（確認する側・確認される側）</span>'); ?>

                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '確認する側：33万円<br>確認される側：55万円'],
                    ['訴訟', '55万円<span>（交渉から移行する場合は33万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_1col([
                    '解決基礎報酬',
                    '交渉は33万円・訴訟は55万円',
                ]); ?>
                <?php price_table_1col([
                    '確認する側の経済的利益獲得報酬',
                    '遺産分割の報酬基準に準じて算出',
                ]); ?>
                <?php price_table_1col([
                    '確認される側の経済的利益獲得報酬',
                    '遺留分侵害額請求の被請求側に準じて算出',
                ]); ?>
            </div>

            <!-- 06:相続放棄 -->
            <div class="service__price-box" id="anc-price-06">
                <?php service_price_title('相続放棄'); ?>

                <?php price_table_3col([
                    ['解決手段', '着出金', '報酬金'],
                    ['熟慮期間内の申述', '5万5000円 (相続人1人につき )', '5万5000円 (相続人1人につき )'],
                    ['熟慮期間外の申述', '11万円 (相続人1人につき )', '11万円 (相続人1人につき )'],
                    ['熟慮期間伸長の申立て', '2万2000円 (相続人1人につき )', '3万3000円 (相続人1人につき )'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「熟慮期間」とは、「自己のために相続の開始があったこと（被相続人が亡くなったことと、それにより自分が相続人となったこと）を知った時」から３か月以内をいいます。</li>
                    <li>報酬金は、申述また申立てが家庭裁判所に受理された場合に頂戴いたします。</li>
                    <li>申述までの期間が1か月を切っている要急案件の場合は、追加着手金として2万2000円を加算します。あまりにも申述までの期間が短い場合はご依頼をお受けできない場合がございますのでご了承ください。</li>
                    <li>相続放棄前または相続放棄後の債権者対応（電話連絡や書類送付）を委任する場合は、債権者1名（1社）あたり2万2000円で承ります。なお、この対応は、相続放棄受理通知書または受理証明を債権者に発送するまでの対応となります。</li>
                </ul>
            </div>

            <!-- 07:公正証書遺言の作成 -->
            <div class="service__price-box" id="anc-price-07">
                <?php service_price_title('公正証書遺言の作成'); ?>
                <?php price_table_3col([
                    ['遺言の種類', '着手金', '報酬金'],
                    ['定型', '1通22万円', '0円'],
                    ['非定型', '1通33万円', '0円'],
                ]); ?>
            </div>

            <!-- 08:遺言執行 -->
            <div class="service__price-box" id="anc-price-08">
                <?php service_price_title('遺言執行'); ?>
                <p class="service__price-text">遺言書で当事務所を遺言執行者に指定いただき、実際に遺言執行者に就任した場合、以下の費用を頂戴いたし</p>
                <?php price_table_2col([
                    ['遺産の価額', '報酬金'],
                    ['300万円以下の場合', '33万円'],
                    ['300万円を超え3000万円以下', '遺産の2.2％＋26万4000円'],
                    ['3000万円を超え3億円以下', '遺産の1.1％＋59万4000円'],
                    ['3億円を超える場合', '遺産の0.55％＋224万4000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>遺言執行報酬とは別に、裁判手続きを行う場合は、裁判に要する弁護士報酬等は別途必要となる場合がございます。</li>
                </ul>
            </div>

            <!-- 09:遺言の検認の申立て -->
            <div class="service__price-box" id="anc-price-09">
                <?php service_price_title('遺言の検認の申立て'); ?>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['11万円', '0円'],
                ]); ?>
            </div>

            <!-- 10:成年後見等申立て -->
            <div class="service__price-box" id="anc-price-10">
                <?php service_price_title('成年後見等申立て'); ?>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['33万円', '0円'],
                ]); ?>
            </div>

            <!-- 11:相続財産管理人・遺産管理人選任申立て -->
            <div class="service__price-box" id="anc-price-11">
                <?php service_price_title('相続財産管理人・遺産管理人選任申立て'); ?>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['33万円', '0円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>相続人や相続財産の調査等が困難である事件については、着手金に11万円を加算させていただく場合がございます。</li>
                </ul>
            </div>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->