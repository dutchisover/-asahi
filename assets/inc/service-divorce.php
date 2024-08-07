<?php

/**
 * Template Name: 離婚・男女問題
 * slug: divorce
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
            <span class="fw-medium"><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-divorce_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-divorce.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

    <section class="section" data-section-title="Service 04">

        <p class="service__copy"><em>離婚・男女問題</em>は<br class="pc-none">当事務所にお任せ下さい。<br><span>有利な条件で解決できるよう全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-divorce-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-divorce-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>不倫の慰謝料請求をしたい／された</li>
                    <li>離婚の話合いを自分だけで進められるか不安</li>
                    <li>離婚後に養育費がきちんと支払われるか不安</li>
                    <li>住宅ローンがある場合の財産分与のやり方が分からない</li>
                    <li>別居中の子供と面会交流がしたい</li>
                    <li>調停で約束した婚姻費用・養育費の支払いがされない</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>当事務所は、離婚・不貞慰謝料（請求側／被請求側）・婚姻費用・養育費・財産分与・面会交流・養育費等の不払いによる給与の差押え等、男女問題に幅広く対応しております。ご依頼者様の状況を詳しくお伺いし、密に連絡をとりご要望をお伺いしながら、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>離婚・男女問題の取扱業務</span>
        </h2>

        <p class="section__copy">当事務所では、離婚・男女問題を取り扱っております。<br>下記に列挙した取扱業務はその一例となります。</p>
        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>不貞慰謝料<br><span>（請求側／被請求側）</span></em>
                </h3>
                <p class="service__field-text">不貞とは、夫婦関係にある男女が、その貞操義務に違反して他の男女と性的行為に及ぶことです。不貞によって配偶者の被った精神的苦痛は、慰謝料請求の対象となります。<br>不貞慰謝料のご相談は、請求側からはもちろんのこと、請求をされた側（被請求側）にも対応しています。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>離婚手続の代理</em>
                </h3>
                <p class="service__field-text">離婚をする方法には、主に、協議離婚、調停離婚、裁判離婚の３種類があります。離婚手続は、「調停前置主義」という考え方がとられているため、離婚訴訟をする前に必ず離婚調停の申立てをしなければなりません。つまり、離婚の争いは「協議→調停→訴訟」という流れで進みます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>子どもに関する争い<br><span>（親権・養育費・面会交流）</span></em>
                </h3>
                <p class="service__field-text">夫婦間に未成年の子がいる場合、子どもに関する争いがとても重要となります。主要な争点は、親権・育費・面会交流です。全ての争点についてサポート可能です。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>財産分与</em>
                </h3>
                <p class="service__field-text">財産分与とは、離婚した相手に対して財産の分与を請求することです。財産分与の対象となる財産には、不動産、預貯金、生命保険、子ども名義の学資保険、株式などがあります。不動産や非上場株式のように客観的な評価が難しい財産がある場合でもサポート可能です。</p>
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
                <span>離婚・男女問題に関する事例や記事</span>
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
            <span>離婚・男女問題の弁護士費用 (全て税込表記)</span>
        </h2>

        <div class="service__price-nav">
            <!-- <a href="" class="service__price-nav-link"></a> -->
        </div>

        <div class="service__price-container">

            <!-- 01:相談料 -->
            <div class="service__price-box">
                <?php service_price_title('相談料'); ?>
                <?php price_table_2col([
                    ['時間', '相談料'],
                    ['初回最初の30分', '0円'],
                    ['以後30分ごと', '5,500円'],
                ]); ?>
            </div>

            <!-- 02:離婚 -->
            <div class="service__price-box">
                <?php service_price_title('離婚'); ?>
                <?php price_table_3col([
                    ['解決手段', '着出金', '基礎報酬金'],
                    ['交渉', '22万円', '33万円'],
                    ['調停', '33万円<span>（交渉から移行した場合は22万円）</span>', '38万5000円'],
                    ['訴訟', '44万円<span>(調停から移行する場合は33万円)</span><span>（慰謝料請求、財産分与を訴訟で取扱う場合は各5万5000円を加算）</span>', '44万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>当事務所では、交渉・調停の場合は、離婚の他に親権・面会交流・婚姻費用・養育費・財産分与・慰謝料・年金分割の問題が付随した場合でも追加着手金は頂戴しておりません。</li>
                    <li>離婚のご依頼はなく、親権・面会交流・婚姻費用・養育費・財産分与・年金分割のみのご依頼の場合の着手金は、上記着手金と同額となります。</li>
                    <li>子の氏の変更許可申立を行う場合は、3万3000円で承ります（離婚をしたとしても子の氏は当然には親権者の氏とはなりません。そのため、氏の変更を希望する場合は家庭裁判所に対し申立を行う必要があります。）</li>
                </ul>
            </div>

            <!-- 03:離婚問題のオプション -->
            <div class="service__price-box">
                <?php service_price_title('離婚問題のオプション'); ?>
                <?php price_table_5col([
                    ['オプション', '報酬金'],
                    ['親権<span>（１名ごと）</span>', '獲得した場合', '獲得を阻止した場合', '22万円<span>（調査官調査を経た場合は、22万円を加算）</span>', '22万円<span>（調査官調査を経た場合は、22万円を加算）</span>'],
                    ['面会交流<span>（１名ごと）</span>', '達成した場合', '条件向上が実現した場合', '22万円<span>（調査官調査を経た場合は、11万円を加算）</span>', '22万円<span>（調査官調査を経た場合は、11万円を加算）</span>'],
                    ['婚姻費用', '得られた場合', '減額した場合', '得られた額の2年分（現実の受領が2年を超える場合は受領期間分）の11％<span>（最低22万円）</span>', '減額した額の2年分の11％<span>（最低22万円）</span>'],
                    ['養育費', '得られた場合', '減額した場合', '得られた額の5年分の11％<span>（最低22万円）</span>', '減額した額の5年分の11％<span>（最低22万円）</span>'],
                    ['財産分与', '得られた場合', '減額した場合', '得られた額の11％<span>（最低22万円）</span>', '減額した額の11％<span>（最低22万円）</span>'],
                    ['慰謝料・解決金', '得られた場合', '減額した場合', '得られた額の11％<span>（最低22万円）</span>', '減額した額の11％<span>（最低22万円）</span>'],
                    ['年金分割', '得られた場合', '減額した場合', '11万円', '減額した額の22％</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>面会交流の「達成」・「条件向上」は、現状との比較により条件が向上した場合を含みます。</li>
                </ul>
            </div>

            <!-- 04:不貞慰謝料 -->
            <div class="service__price-box">
                <?php service_price_title('不貞慰謝料'); ?>
                <h4 class="service__price-subtitle">請求側</h4>
                <?php price_table_3col([
                    ['解決手段', '着出金', '報酬金'],
                    ['交渉', '22万円', '認容額の22％<span>（最低33万円）</span>'],
                    ['訴訟', '33万円<span>（交渉から移行する場合は22万円）</span>', '認容額の22％<span>（最低44万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>「認容額」とは、和解や認容判決等で最終的に認められた相手方の支払額をいいます。</li>
                </ul>

                <h4 class="service__price-subtitle">被請求側 : 着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '22万円'],
                    ['訴訟', '33万円<span>（交渉から移行する場合は22万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>

                <h4 class="service__price-subtitle">被請求側 : 報酬金</h4>
                <?php price_table_2col([
                    ['減額額', '料金'],
                    ['300万円以下', '減額額の22％<span>（交渉の場合は最低33万円）</span><span>（訴訟の場合は最低44万円）</span>'],
                    ['300万円を超え3000万円以下', '減額額の11％＋44万円'],
                    ['3000万円を超え3億円以下', '減額額の6.6％＋165万円 '],
                    ['3億円を超える場合', '減額額の4.4％＋825万円'],
                ]); ?>

            </div>

            <!-- 05:監護者指定・子の引渡し・審判前の保全処分 -->
            <div class="service__price-box">
                <?php service_price_title('監護者指定・子の引渡し・審判前の保全処分'); ?>

                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['55万円', '【基礎報酬】<br>33万円<br><br>【成功報酬】<br>55万円'],
                ]); ?>

                <!-- <table class="service__price-table">
                    <thead>
                        <tr>
                            <th colspan="2">報酬金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>基礎報酬</td>
                            <td>33万円</td>
                        </tr>
                        <tr>
                            <td>成功報酬</td>
                            <td>55万円</td>
                        </tr>
                    </tbody>
                </table> -->
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>

            </div>

            <!-- 06:強制執行 -->
            <div class="service__price-box">
                <?php service_price_title('強制執行'); ?>
                <h4 class="service__price-subtitle">履行勧告（内容証明郵便）</h4>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['5万5000円', '0万円'],
                ]); ?>

                <h4 class="service__price-subtitle">強制執行（給与差押え等） : 着手金</h4>
                <?php price_table_2col([
                    ['請求金額', '料金'],
                    ['300万円以下', '請求額の4.4％,<span>（最低11万円）</span>'],
                    ['300万円を超え3000万円以下', '請求額の2.75%＋5万5000円'],
                    ['3000万円を超え3億円以下', '請求額の1.65%＋38万5000円'],
                    ['3億円を超える場合', '請求額の1.1%＋203万5000円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>上記料金プランは、交渉、調停、訴訟等を当事務所にご依頼いただいたお客様の料金となりますので、執行のみでご依頼のお客様は別途料金となります。</li>
                </ul>

                <h4 class="service__price-subtitle">強制執行（給与差押え等） : 報酬金</h4>
                <?php price_table_2col([
                    ['回収金額', '料金'],
                    ['300万円以下', '回収金額の8.8％,<span>（最低22万円）</span>'],
                    ['300万円を超え3000万円以下', '回収金額の5.5%＋9万9000円'],
                    ['3000万円を超え3億円以下', '回収金額の3.3%＋75万9000円'],
                    ['3億円を超える場合', '回収金額の2.2%＋405万9000円'],
                ]); ?>

            </div>



            <div class="service__price-box">
                <?php service_price_title('離婚協議書の作成'); ?>

                <table class="service__price-table">
                    <thead>
                        <tr>
                            <th>着手金</th>
                            <th>報酬金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>【公正証書の場合】<br>16万5000円</td>
                            <td rowspan="2" class="is-middle">0円
                            </td>
                        </tr>
                        <tr>
                            <td>【公正証書以外の場合】<br>11万円</td>
                        </tr>
                    </tbody>
                </table>

            </div>


        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->