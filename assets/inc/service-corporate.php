<?php

/**
 * Template Name: 企業法務：顧問
 * slug: corporate
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
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-corporate_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-corporate.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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


        <p class="service__copy"><em>企業法務・顧問</em>は<br class="pc-none">当事務所にお任せ下さい。<br><span>素早いレスポンスと丁寧な対応でサポートいたします。</span>
        </p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-corporate-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-corporate-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>日常的に起きる法律問題を気軽に相談できる弁護士がほしい</li>
                    <li>トラブル対応、契約書チェック等にすぐ対応してほしい</li>
                    <li>自社のビジネスを理解した法的アドバイスが欲しい</li>
                    <li>経営者やその家族の個人的な問題や従業員の相談にのってもらいたい</li>
                    <li>法務部のアウトソーシングをしたい</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>当事務所では、契約書の作成・チェック、債権回収、就業規則の改定、労務問題、株主総会対応など、企業が直面する様々な法律問題について、丁寧・迅速に対応しています。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>企業法務・顧問の取扱い業務</span>
        </h2>

        <p class="section__copy">当事務所では、企業に関する各種法律問題を取り扱っております。<br>些細なことでも結構ですので、お気軽にお問合せいただければと思います。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>契約書のチェック・確認</em>
                </h3>
                <p class="service__field-text">契約書はビジネスの根幹をなすものです。ビジネスを成功に導くためには、潜在化したリスクに注意しながら、自らの希望に沿った契約をすることが重要です。<br>当事務所は、単なる契約文言の分析や修正に留まらず、ご依頼者様の経営目的に合致した結果が実現されるよう、きめ細かなサービスを提供しています。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>人事労務</em>
                </h3>
                <p class="service__field-text">残業代請求や解雇無効請求等、紛争化してしまった案件の処理のみならず、予防法務にも力をいれています。就業規則、雇用契約書等の作成・チェック、労務管理の方法など経営全般に関するサポートが可能です。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>取引関係紛争</em>
                </h3>
                <p class="service__field-text">代金の支払いをしない取引先等に対する債権回収の交渉、訴訟の代理等を行います。<br>相手方との紛争が訴訟に発展した場合にも、迅速な解決、円満な解決、徹底抗戦など、ご要望に応じて対応します。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>会社組織の運営<br><span>（株主総会、取締役会）</span></em>
                </h3>
                <p class="service__field-text">取締役会における法的アドバイスから議事録作成までサポートいたします。また、株主総会対策として、招集手続から、想定問答集の作成、リハーサル、当日の会議の運営までサポートいたします。社外監査役等への就任についてもご相談に応じます。</p>
            </div>
        </div>
    </section>

    <section class="section" data-section-title="case study">
        <h2 class="section__title">
            <em>case study</em>
            <span>企業法務・顧問に関する事例や記事</span>
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
            <span>企業法務・顧問の弁護士費用 (全て税込表記)</span>
        </h2>

        <div class="service__price-nav">
            <!-- <a href="" class="service__price-nav-link"></a> -->
        </div>

        <div class="service__price-container">
            <div class="service__price-box">
                <?php service_price_title('顧問契約'); ?>
                <?php price_table_1col([
                    '月額',
                    '5.5万円（原則）',
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('顧問契約の内容'); ?>
                <?php price_table_3col([
                    ['業務内容', '料金', '通常料金（参考）'],
                    ['HPへの顧問弁護士表示', '0円', '非対応'],
                    ['対面相談', '0円', '1万1000円／30分'],
                    ['電話相談', '0円', '非対応'],
                    ['メール・チャット相談', '0円', '非対応'],
                    ['従業員・家族の相談', '0円', '非対応'],
                    ['契約書チェック', '0円<br>（月3通）', '１通5.5万円～'],
                    ['契約書の作成・大幅な修正', '原則5.5万円／1通', '1通11万円～'],
                    ['簡易な通知文書の作成<br>(弁護士名義は非表示)', '０円<br>（月1通）', '１通11万円～'],
                    ['就業規則の確認・修正', '11万円', '22万円～'],
                    ['就業規則の作成', '16.5万円', '33万円～'],
                    ['専門家紹介', '0円', '非対応'],
                ]); ?>
                <ul class="service__price-list">
                    <li>顧問契約に含まれないご相談については、個別に対応させていただきます。</li>
                </ul>
            </div>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->
