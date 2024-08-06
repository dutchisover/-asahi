<?php

/**
 * Template Name: 離婚・男女問題
 * slug: divorce
 */
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

    <section class="section" data-section-title="Service 01">

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
                    <em>不貞慰謝料（請求側／被請求側）</em>
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
                    <em>子どもに関する争い<br>（親権・養育費・面会交流）</em>
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

    <section class="section" data-section-title="Price of Service" id="anc-price">
        <h2 class="section__title">
            <em>price</em>
            <span>離婚・男女問題の弁護士費用 (全て税込表記)</span>
        </h2>

        <div class="service__price-nav">
            <!-- <a href="" class="service__price-nav-link"></a> -->
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
            </div>

            <div class="service__price-box" id="anc-price-02">
                <h3 class="service__price-title">
                    <span class="sp-none">Price - </span>
                    <span class="pc-none">#</span>
                    <em>離婚</em>
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

                <table class="service__price-table">
                    <thead>
                        <tr>
                            <th>解決手段</th>
                            <th>料金</th>
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
