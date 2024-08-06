<?php

/**
 * Template Name: 労働問題
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
            <em><?= $title; ?></em>
            <span><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-family_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-family.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

        <p class="service__copy"><em>遺産相続</em>にまつわる問題は<br class="pc-none">当事務所へお任せ下さい。<br><span>多数の解決実績に基づき、全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>身内が亡くなり相続問題をどう進めるべきかわからない</li>
                    <li>遺産分割の協議がまとまらない（特別受益、寄与分、葬儀費用等）</li>
                    <li>他の相続人の連絡先が分からず遺産分割協議ができない</li>
                    <li>遺産を独り占めする相続人がおり、遺留分が侵害されている</li>
                    <li>遺産である預金を使い込んでいる相続人がいる</li>
                    <li>遺産である不動産の分割方法／評価額で揉めている</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>かつて所属していた葛飾総合法律事務所は、都内２３区内で高齢者人口が上位の葛飾区に位置しており、遺産相続問題に注力しておりました。一癖も二つ癖もある遺産分割協議・調停、遺留分の請求／減額交渉、遺言書の作成、遺言執行等、多数の遺産相続問題を解決してきました。ご依頼者様の状況を詳しくお伺いし、密に連絡をとりご要望をお伺いしながら、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>遺産相続・遺言の取扱い業務</span>
        </h2>

        <p class="section__copy">当事務所では、遺言、遺産分割、遺留分侵害額請求のほか、相続に関する各種問題を取り扱っております。<br>些細なことでも結構ですので、お気軽にお問い合わせ頂ければと思います。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>遺産分割手続</em>
                </h3>
                <p class="service__field-text">特定の相続人の方に全ての財産を相続させる旨の遺言がある場合であっても、他の相続人の方は、本来の相続分の2分の1まで、遺留分として財産を取得することができます。 遺産分割の場合と同じように、任意交渉で話がまとまらない場合には、裁判所における調停・裁判の手続を行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>遺産分割手続</em>
                </h3>
                <p class="service__field-text">特定の相続人の方に全ての財産を相続させる旨の遺言がある場合であっても、他の相続人の方は、本来の相続分の2分の1まで、遺留分として財産を取得することができます。 遺産分割の場合と同じように、任意交渉で話がまとまらない場合には、裁判所における調停・裁判の手続を行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>遺産分割手続</em>
                </h3>
                <p class="service__field-text">特定の相続人の方に全ての財産を相続させる旨の遺言がある場合であっても、他の相続人の方は、本来の相続分の2分の1まで、遺留分として財産を取得することができます。 遺産分割の場合と同じように、任意交渉で話がまとまらない場合には、裁判所における調停・裁判の手続を行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>遺産分割手続</em>
                </h3>
                <p class="service__field-text">特定の相続人の方に全ての財産を相続させる旨の遺言がある場合であっても、他の相続人の方は、本来の相続分の2分の1まで、遺留分として財産を取得することができます。 遺産分割の場合と同じように、任意交渉で話がまとまらない場合には、裁判所における調停・裁判の手続を行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 05</span>
                    <em>遺産分割手続</em>
                </h3>
                <p class="service__field-text">特定の相続人の方に全ての財産を相続させる旨の遺言がある場合であっても、他の相続人の方は、本来の相続分の2分の1まで、遺留分として財産を取得することができます。 遺産分割の場合と同じように、任意交渉で話がまとまらない場合には、裁判所における調停・裁判の手続を行います。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 06</span>
                    <em>遺産分割手続</em>
                </h3>
                <p class="service__field-text">特定の相続人の方に全ての財産を相続させる旨の遺言がある場合であっても、他の相続人の方は、本来の相続分の2分の1まで、遺留分として財産を取得することができます。 遺産分割の場合と同じように、任意交渉で話がまとまらない場合には、裁判所における調停・裁判の手続を行います。</p>
            </div>
        </div>
    </section>

    <section class="section" data-section-title="case study">
        <h2 class="section__title">
            <em>case study</em>
            <span>遺産相続・遺言に関する事例や記事</span>
        </h2>

        <div class="service__case">
            <div class="archive__container">
                <ul class="archive__list">
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
                    if ($topics_query->have_posts()) :
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
            <?php
                        wp_reset_postdata();
                    else :
            ?>
                <p>お知らせはありません。</p>
            <?php endif; ?>
            </div>
        </div>

        <!-- <div class="service__case">
			<?php
            // ページのスラッグを取得
            $slug = get_post_field('post_name', get_post());

            // クエリの引数を設定
            $args = array(
                'post_type' => 'topics',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'topics_taxonomy',
                        'field' => 'slug',
                        'terms' => $slug,
                    ),
                ),
            );

            // カスタムクエリを実行
            $query = new WP_Query($args);

            // 記事が存在する場合
            if ($query->have_posts()) :
                echo '<div class="archive__container">';
                while ($query->have_posts()) : $query->the_post();
            ?>
					<div class="archive__list">
						<a href="" class="archive__item-link">
							<?php if (has_post_thumbnail()) : ?>
								<div class="archive__item-image">
									<?php the_post_thumbnail('medium'); ?>
								</div>
							<?php endif; ?>

							<div class="archive__item-content">
								<p class="archive__item-date">
									<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y-m-d'); ?></time>
									<span class="archive__item-taxonomy taxonomy-other">
										<?php
                                        $terms = get_the_terms(get_the_ID(), 'topics_taxonomy');
                                        if ($terms && !is_wp_error($terms)) :
                                            $term_names = wp_list_pluck($terms, 'name');
                                            echo implode(', ', $term_names);
                                        endif;
                                        ?>
									</span>
								</p>
								<p class="archive__item-title"><?php the_title(); ?></p>
								<div class="archive__item-text">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</a>
					</div>
			<?php
                endwhile;
                echo '</div>';
                wp_reset_postdata();
            else :
                echo '<p>関連する記事は見つかりませんでした。</p>';
            endif;
            ?>
		</div> -->

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

    <section class="section" data-section-title="Price of Service">
        <h2 class="section__title">
            <em>price</em>
            <span>遺産相続・遺言の弁護士費用 (全て税込表記)</span>
        </h2>

        <div class="service__price-nav">
            <!-- <a href="" class="service__price-nav-link"></a> -->
        </div>

        <div class="service__price-tab">
            <a href="#anc-price-01" class="service__price-tab-primary">弁護士費用特約に加入されている方</a>
            <a href="#anc-price-02" class="service__price-tab-secondary">弁護士費用特約に加入されていない方</a>
        </div>

        <div class="service__price-container">
            <div class="service__price-box" id="anc-price-01">
                <h3 class="service__price-title">
                    <span class="sp-none">Price - </span>
                    <span class="pc-none">#</span>
                    <em>相談料</em>
                </h3>

                <table class="service__price-table">
                    <thead>
                        <tr>
                            <th>解決手段</th>
                            <th>料金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>協議（交渉）</td>
                            <td>22円</td>
                        </tr>
                        <tr>
                            <td>調停・審判</td>
                            <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="service__price-box" id="anc-price-02">
                <h3 class="service__price-title">
                    <span class="sp-none">Price - </span>
                    <span class="pc-none">#</span>
                    <em>遺産分割</em>
                </h3>

                <p class="service__price-text">日本弁護士連合会（旧）報酬基準や多くの法律事務所では、着手金が遺産の額に応じて設定されております。<br>そのため、遺産に不動産が含まれる場合などは着手金が非常に高額になる場合や、遺産が確定するまで着手金も確定しない場合があります。<br>そこで、当事務所では着手金の額を固定とすることで、ご依頼いただきやすい料金設定となっております。</p>

                <h4 class="service__price-subtitle">着手金</h4>

                <table class="service__price-table">
                    <thead>
                        <tr>
                            <th>解決手段</th>
                            <th>料金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>協議（交渉）</td>
                            <td>22円</td>
                        </tr>
                        <tr>
                            <td>調停・審判</td>
                            <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                        </tr>
                    </tbody>
                </table>

                <table class="service__price-table is-text-left">
                    <thead>
                        <tr>
                            <th>解決手段</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>協議（交渉）</td>
                        </tr>
                    </tbody>
                </table>

                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>遺産分割は、前提問題として、相続人・遺産範囲等の確認訴訟の提起を要する場合があります。その場合の弁護士費用は、着手金33万円、基礎報酬33万円を基本とし、経済的利益が発生した場合は遺産分割の報酬基準に準じて決定します。</li>
                    <li>
                        相続財産の調査のみは、着手金11万円、報酬金０円となります。
                        <ul>
                            <li>最終取得遺産額が１億円以下の場合：同額の3.3％（最低66万円）</li>
                            <li>最終取得遺産額が１億円を超える場合：同額の2.2％</li>
                        </ul>
                    </li>
                </ul>

                <h4 class="service__price-subtitle">追加レイアウト</h4>

                <div class="service__price-switch">
                    <div class="service__price-switch-pc">
                        <table class="service__price-table">
                            <thead>
                                <tr>
                                    <th>解決手段</th>
                                    <th>着出金</th>
                                    <th>料金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>協議（交渉）</td>
                                    <td>22円</td>
                                    <td>22円</td>
                                </tr>
                                <tr>
                                    <td>調停・審判</td>
                                    <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                                    <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="service__price-switch-sp">
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title">
                                <span>解決手段</span>
                                <em>協議（交渉）</em>
                            </p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着出金</th>
                                        <th>料金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>22円</td>
                                        <td>22円</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title">
                                <span>解決手段</span>
                                <em>調停・審判</em>
                            </p>
                            <table class="service__price-table">
                                <thead>
                                    <tr>
                                        <th>着出金</th>
                                        <th>料金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                                        <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="service__price-switch">
                    <div class="service__price-switch-pc">
                        <table class="service__price-table is-special">
                            <thead>
                                <tr>
                                    <th>オプション</th>
                                    <th colspan="2">報酬金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2">親権<span>（１名ごと）</span></td>
                                    <th>獲得した場合</th>
                                    <th>獲得を阻止した場合</th>
                                </tr>
                                <tr>
                                    <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                    <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                </tr>

                                <tr>
                                    <td rowspan="2">面会交流<span>（１名ごと）</span></td>
                                    <th>獲得した場合</th>
                                    <th>獲得を阻止した場合</th>
                                </tr>
                                <tr>
                                    <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                    <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="service__price-switch-sp">
                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title">
                                <span>オプション</span>
                                <em>親権（１名ごと）</em>
                            </p>
                            <table class="service__price-table is-special">
                                <thead>
                                    <tr>
                                        <th colspan="2">報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>獲得した場合</th>
                                        <th>獲得を阻止した場合</th>
                                    </tr>
                                    <tr>
                                        <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                        <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="service__price-switch-section">
                            <p class="service__price-switch-title">
                                <span>オプション</span>
                                <em>面会交流（１名ごと）</em>
                            </p>
                            <table class="service__price-table is-special">
                                <thead>
                                    <tr>
                                        <th colspan="2">報酬金</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>獲得した場合</th>
                                        <th>獲得を阻止した場合</th>
                                    </tr>
                                    <tr>
                                        <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                        <td>22万円<span>（調査官調査を経た場合は、22万円を加算）</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="service__price-faq">
                    <div class="service__price-faq-image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-trafficaccident-02.jpg" alt="" class="" width="368" height="230">
                    </div>
                    <dl class="service__price-faq-body">
                        <dt class="service__price-faq-title">Q.弁護士費用特約とは？</dt>
                        <dd class="service__price-faq-text">主に自動車保険に付帯しているオプションです。交通事故について弁護士に依頼する際、弁護士費用の全部又は一部の補償を受ける事ができます。</dd>
                        </di>
                </div>


                <?php price_table_5col([
                    ['オプション', '報酬金'],
                    ['親権<span>（１名ごと）</span>', '獲得した場合', '獲得を阻止した場合', '22万円<span>（調査官調査を経た場合は、22万円を加算）</span>', '22万円<span>（調査官調査を経た場合は、22万円を加算）</span>'],
                    ['面会交流<span>（１名ごと）</span>', '獲得した場合', '獲得を阻止した場合', '22万円<span>（調査官調査を経た場合は、22万円を加算）</span>', '22万円<span>（調査官調査を経た場合は、22万円を加算）</span>'],
                ]); ?>
            </div>

            <div class="service__price-box" id="anc-price-03">
                <h3 class="service__price-title">
                    <span class="sp-none">Price - </span>
                    <span class="pc-none">#</span>
                    <em>不当利得返還請求（請求側・被請求側）</em>
                </h3>

                <table class="service__price-table">
                    <thead>
                        <tr>
                            <th>遺留分侵害額請求（遺留分減殺請求）</th>
                            <th>料金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>協議（交渉）</td>
                            <td>22円</td>
                        </tr>
                        <tr>
                            <td>調停・審判</td>
                            <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="service__price-box" id="anc-price-04">
                <h3 class="service__price-title">
                    <span class="sp-none">Price - </span>
                    <span class="pc-none">#</span>
                    <em>遺言無効確認（確認する側・確認される側）</em>
                </h3>

                <table class="service__price-table">
                    <thead>
                        <tr>
                            <th>遺留分侵害額請求（遺留分減殺請求）</th>
                            <th>料金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>協議（交渉）</td>
                            <td>22円</td>
                        </tr>
                        <tr>
                            <td>調停・審判</td>
                            <td>33万円<span>（協議から移行する場合は22万円）</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="service__price-box" id="anc-price-05">
                <h3 class="service__price-title">
                    <span class="sp-none">Price - </span>
                    <span class="pc-none">#</span>
                    <em>相続放棄</em>
                </h3>

                <table class="service__price-table">
                    <thead>
                        <tr>
                            <th>遺留分侵害額請求（遺留分減殺請求）</th>
                            <th>料金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>協議（交渉）</td>
                            <td>22円</td>
                        </tr>
                        <tr>
                            <td>調停・審判</td>
                            <td>33万円<span>（協議から移行する場合は22万円）</span></td>
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
