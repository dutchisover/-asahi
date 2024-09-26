<?php

/**
 * Template Name: 不動産
 * slug: realestate
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
            <span><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-realestate_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-realestate.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

    <section class="section" data-section-title="Service 06">

        <p class="service__copy"><em>不動産トラブル</em>に<br class="pc-none">精通した弁護士が、<br>全力でサポートいたします。</p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-realestate-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-realestate-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>家賃を滞納している賃借人を追い出したい</li>
                    <li>建物を建替えるため、賃借人に退去してもらいたい</li>
                    <li>親族／知人に無償で貸した建物を返してもらえない</li>
                    <li>賃料の滞納分を回収したい</li>
                    <li>不動産の共有状態を解消したい</li>
                    <li>地主が借地権の譲渡に承諾してくれない</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>当事務所は、滞納賃料の回収、建物・土地明渡請求、借地トラブル、共有物分割請求、賃料増減額請求、強制執行等、不動産に関する問題に幅広く対応しております。
                    ご依頼者様の状況を詳しくお伺いし、密に連絡をとりご要望をお伺いしながら、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>不動産の取扱い業務</span>
        </h2>

        <p class="section__copy">当事務所では、不動産に関する各種問題を取り扱っております。<br>下記に列挙した取扱業務はその一例となります。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>賃貸経営に関する<br>トラブル</em>
                </h3>
                <p class="service__field-text">賃貸経営においてオーナーを最も悩ませる問題が、賃料不払い問題です。また、老朽化した建物を建て替えたい場合、入居者の数が多ければ多いほど、立退交渉のハードルは上がります。当事務所では、未払賃料回収、明渡請求、立退交渉など、賃貸経営に関するトラブルに幅広く対応しています。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>借地に関するトラブル</em>
                </h3>
                <p class="service__field-text">借地契約には、更新料、建替承諾料、譲渡承諾料、名義変更料などといった、借地以外の不動産取引では一般的ではない商慣習もあり、知識不足から想定外のトラブルとなってしまうこともあります。<br>借地に関するトラブルは、まずは交渉を行い、必要に応じて借地非訟手続などを利用して解決を行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>共有物の分割</em>
                </h3>
                <p class="service__field-text">共有とは、1つの物を複数人が共同で所有することをいい、各共有者は、共有物全体を他の共有者の同意なく勝手に売却することはできません。<br>他の共有者が売却に同意しない場合は、他の共有者を相手方として共有物分割訴訟を提起することにより、共有物全体を処分等して持分権を換価することができます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>各種不動産契約書の<br>チェック・作成</em>
                </h3>
                <p class="service__field-text">不動産売買契約、賃貸借契約等は、いざ紛争となった場合に、こちら側で用意した契約書にも関わらず相手方に有利な内容となっていたり、法改正が反映されていない等の想定外の事態に陥ることもあります。<br>当事務所では、各種不動産契約書のチェック・作成に対応しています。</p>
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
                <span>不動産に関する事例や記事</span>
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
            <span>不動産の弁護士費用 (全て税込表記)</span>
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
                <?php service_price_title('不動産明渡請求'); ?>
                <div class="service__price-switch">
                    <div class="service__price-switch-pc">
                        <table class="service__price-table">
                            <thead>
                                <tr>
                                    <th>解決手段</th>
                                    <th>着手金</th>
                                    <th>報酬金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>交渉</td>
                                    <td>33万円</td>
                                    <td rowspan="2" class="is-text-left"><span>・賃料滞納を理由とする場合、33万円</span><span>・賃料滞納以外を理由とする場合、55万円</span></td>
                                </tr>
                                <tr>
                                    <td>訴訟</td>
                                    <td>33万円<span class="is-remark">（交渉から移行する場合は11万円）</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="service__price-switch-sp">
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title"><span>解決手段</span><em>交渉</em></p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着手金</th>
                                        <th>報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>33万円</td>
                                        <td class="is-text-left"><span>・賃料滞納を理由とする場合、33万円</span><span>・賃料滞納以外を理由とする場合、55万円</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title"><span>解決手段</span><em>訴訟</em></p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着手金</th>
                                        <th>報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>33万円<span class="is-remark">（交渉から移行する場合は11万円）</span></td>
                                        <td class="is-text-left"><span>・賃料滞納を理由とする場合、33万円</span><span>・賃料滞納以外を理由とする場合、55万円</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>占有移転禁止の仮処分は、着手金22万円・報酬金0円で承ります。</li>
                    <li>不動産明渡しの強制執行は、着手金22万円・報酬金0円で承ります。</li>
                    <li>内容証明郵便（弁護士名無し）の作成のみのご依頼は、着手金8万8000円、報酬金0円で承ります。</li>
                </ul>

                <h4 class="service__price-subtitle">未払賃料請求も同時に請求に含める場合</h4>
                <div class="service__price-switch">
                    <div class="service__price-switch-pc">
                        <table class="service__price-table">
                            <thead>
                                <tr>
                                    <th>解決手段</th>
                                    <th>着手金</th>
                                    <th>報酬金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>交渉</td>
                                    <td>0万円</td>
                                    <td>認容額の22％<span class="is-remark">（最低11万円）</span></td>
                                </tr>
                                <tr>
                                    <td>訴訟</td>
                                    <td>5万5000円</td>
                                    <td>認容額の22％<span class="is-remark">（最低22万円）</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="service__price-switch-sp">
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title"><span>解決手段</span><em>交渉</em></p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着手金</th>
                                        <th>報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0万円</td>
                                        <td>認容額の22％<span class="is-remark">（最低11万円）</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title"><span>解決手段</span><em>訴訟</em></p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着手金</th>
                                        <th>報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5万5000円</td>
                                        <td>認容額の22％<span class="is-remark">（最低22万円）</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <ul class="service__price-list">
                    <li>「認容額」とは、和解や認容判決等で最終的に認められた相手方の支払額をいいます。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('共有物分割請求'); ?>
                <div class="service__price-switch">
                    <div class="service__price-switch-pc">
                        <table class="service__price-table">
                            <thead>
                                <tr>
                                    <th>解決手段</th>
                                    <th>着手金</th>
                                    <th>報酬金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>交渉</td>
                                    <td>22万円</td>
                                    <td rowspan="3" class="is-text-left">
                                        <span>
                                            ・相手方が持分を取得した場合、取得した持分の時価額の4.4%
                                        </span>
                                        <span>
                                            ・持分を売却した場合、不動産売却により得られた額の5.5%
                                        </span>
                                        <span>
                                            ・現物分割の場合、取得した不動産の時価額の5.5％
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>調停</td>
                                    <td>22万円<span class="is-remark">（交渉から移行する場合は11万円）</span></td>
                                </tr>
                                <tr>
                                    <td>訴訟</td>
                                    <td>33万円<span class="is-remark">（交渉・調停から移行する場合は22万円）</span></td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="service__price-switch-sp">
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title"><span>解決手段</span><em>交渉</em></p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着手金</th>
                                        <th>報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>22万円</td>
                                        <td class="is-text-left">
                                            <span>
                                                ・相手方が持分を取得した場合、取得した持分の時価額の4.4%
                                            </span>
                                            <span>
                                                ・持分を売却した場合、不動産売却により得られた額の5.5%
                                            </span>
                                            <span>
                                                ・現物分割の場合、取得した不動産の時価額の5.5％
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title"><span>解決手段</span><em>調停</em></p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着手金</th>
                                        <th>報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>22万円<span class="is-remark">（交渉から移行する場合は11万円）</span></td>
                                        </td>
                                        <td class="is-text-left">
                                            <span>
                                                ・相手方が持分を取得した場合、取得した持分の時価額の4.4%
                                            </span>
                                            <span>
                                                ・持分を売却した場合、不動産売却により得られた額の5.5%
                                            </span>
                                            <span>
                                                ・現物分割の場合、取得した不動産の時価額の5.5％
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title"><span>解決手段</span><em>訴訟</em></p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着手金</th>
                                        <th>報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>33万円<span class="is-remark">（交渉・調停から<br class="pc-none">移行する場合は22万円）</span></td>
                                        </td>
                                        <td class="is-text-left">
                                            <span>
                                                ・相手方が持分を取得した場合、取得した持分の時価額の4.4%
                                            </span>
                                            <span>
                                                ・持分を売却した場合、不動産売却により得られた額の5.5%
                                            </span>
                                            <span>
                                                ・現物分割の場合、取得した不動産の時価額の5.5％
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>報酬金はいずれの場合も最低額は66万円となります。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('賃料増減額請求'); ?>
                <?php price_table_2col([
                    ['解決手段', '料金'],
                    ['交渉', '33万円'],
                    ['調停', '33万円<span class="is-remark">（交渉から移行する場合は11万円）</span>'],
                    ['訴訟', '44万円<span class="is-remark">（調停から移行する場合は11万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>賃料増減額請求は、訴訟のためには調停を経ることが必須となります（調停前置主義）。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['賃料増減額の7年分が', '料金'],
                    ['300万円以下', '増減額の7年分の17.6％<span class="is-remark">（最低33万円）</span>'],
                    ['300万円を超え<br>3000万円以下', '増減額の7年分の11％<br class="pc-none">＋19万8000円'],
                    ['3000万円を超え<br>3億円以下の場合', '増減額の7年分の6.6％<br class="pc-none">＋151万8000円'],
                    ['3億円を超える場合', '増減額の7年分の4.4％<br class="pc-none">＋811万8000円'],
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('借地非訟<span>（借地権者側・地主側）</span>'); ?>
                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_2col([
                    ['解決手段', '着手金'],
                    ['交渉', '33万円'],
                    ['非訟', '44万円<span class="is-remark">（交渉から移行する場合は22万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金：借地権者側</h4>
                <?php price_table_2col([
                    ['解決結果', '料金'],
                    ['借地権譲渡許可が<br class="pc-none">得られた場合', '借地権価格の5.5%<span class="is-remark">(最低44万円)</span>'],
                    ['増改築許可・<br class="pc-none">借地条件変更許可が<br class="pc-none">得られた場合', '<div class="is-text-left"><span>・借地権譲渡許可と同時に申立てをしている場合、各22万円</span><span>・単独で申立てをしている場合、各借地権価格の5.5%<span class="is-remark">（最低44万円）</span></span></div>'],
                    ['介入権を行使され<br class="pc-none">認容された場合', '財産上の給付額の11％<span class="is-remark">（最低44万円）</span>'],
                ]); ?>
                <ul class="service__price-list">
                    <li>借地権価格は時価で算出いたします。</li>
                </ul>

                <h4 class="service__price-subtitle">報酬金：地主側</h4>
                <?php price_table_2col([
                    ['解決結果', '料金'],
                    ['介入権を行使して<br class="pc-none">認容された場合', '借地権価格の5.5%<span class="is-remark">(最低44万円)</span>'],
                    ['申立てが許可されたが<br class="pc-none">賃料を増額できた場合', '賃料増額請求の<br class="pc-none">報酬基準に準じる'],
                ]); ?>
                <ul class="service__price-list">
                    <li>借地権価格は時価で算出いたします。</li>
                </ul>
            </div>
        </div>




    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->
