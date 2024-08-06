<?php

/**
 * Template Name: 法人破産・会社解散
 * slug: bankruptcy
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
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-bankruptcy_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-bankruptcy.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

        <p class="service__copy"><em>法人破産・会社解散</em>に<br class="pc-none">まつわる問題は<br class="pc-none">当事務所へお任せ下さい。<br><span>多数の解決実績に基づき、全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-bankruptcy-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-bankruptcy-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>資金繰りが悪化して取引先への支払いが困難</li>
                    <li>従業員への給料の支払いができない</li>
                    <li>経営状態はよくないが本当に破産すべきか判断できない</li>
                    <li>会社の連帯保証人になっており法人破産をするのが怖い</li>
                    <li>債務超過ではないが、もう会社を畳んでリタイヤしたい</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>当事務所は、法人破産／経営者の自己破産／経営者保証ガイドラインによる債務整理／会社解散等、法人・経営者の債務整理に対応しております。ご依頼者様の状況を詳しくお伺いし、それぞれの解決手段のメリット・デメリットを踏まえて、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>法人破産・会社解散の取扱い業務</span>
        </h2>

        <p class="section__copy">当事務所では、法人破産・会社解散に関する各種問題を取り扱っております。<br>些細なことでも結構ですので、お気軽にお問合せいただければと思います。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>法人破産</em>
                </h3>
                <p class="service__field-text">負債が会社の資産を上回っている場合（債務超過）や支払不能の場合に、裁判所を通じて事業を清算する手続です。<br>法人破産の大きな流れは、①申立て準備、②申立て、③財産の換価処分・配当、④終了となります。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>会社解散</em>
                </h3>
                <p class="service__field-text">裁判所を通さない廃業手続で、資産と負債を整理し会社を解散・清算する制度です。会社の資産が負債を上回っている場合に利用できます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>経営者保証ガイドラインに<br>基づく任意整理</em>
                </h3>
                <p class="service__field-text">経営者が会社の債務の連帯保証人になっている場合、会社が破産する場合は経営者個人も破産することになるのが原則です。しかし、経営者保証ガイドラインを利用することにより、破産の場合と比べてより多くの資産を手元に残しながら債務整理を行うことができる場合があります。</p>
            </div>
        </div>
    </section>

    <section class="section" data-section-title="case study">
        <h2 class="section__title">
            <em>case study</em>
            <span>法人破産・会社解散に関する事例や記事</span>
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
            <span>法人破産・会社解散の弁護士費用 (全て税込表記)</span>
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


            <!-- 02:法人破産 -->
            <div class="service__price-box">
                <?php service_price_title('法人破産'); ?>

                <h4 class="service__price-subtitle">負債額が3000万円以下の場合：着手金</h4>
                <?php price_table_2col([
                    ['債権者数', '着手金'],
                    ['1～4', '66万円'],
                    ['5～14', '88万円'],
                    ['15～29', '121万円'],
                    ['30～49', '165万円'],
                    ['50～', '220万円'],
                ]); ?>
                <h4 class="service__price-subtitle">負債額が3000万円を超え1億円以下の場合：着手金</h4>
                <?php price_table_2col([
                    ['債権者数', '着手金'],
                    ['1～4', '77万円'],
                    ['5～14', '99万円'],
                    ['15～29', '132万円'],
                    ['30～49', '176万円'],
                    ['50～', '231万円'],
                ]); ?>
                <h4 class="service__price-subtitle">負債額が1億円を超え2億円以下の場合：着手金</h4>
                <?php price_table_2col([
                    ['債権者数', '着手金'],
                    ['1～4', '88万円'],
                    ['5～14', '121万円'],
                    ['15～29', '154万円'],
                    ['30～49', '198万円'],
                    ['50～', '264万円'],
                ]); ?>
                <h4 class="service__price-subtitle">負債額が2億円を超え3億円以下の場合：着手金</h4>
                <?php price_table_2col([
                    ['債権者数', '着手金'],
                    ['1～4', '110万円～'],
                    ['5～14', '143万円～'],
                    ['15～29', '176万円'],
                    ['30～49', '220万円～'],
                    ['50～', '308万円～'],
                ]); ?>
                <ul class="service__price-list">
                    <li>報酬金はございません。</li>
                    <li>上記の他に別途裁判所費用として最低20万円が必要となります。</li>
                    <li>個人債権者（消費者）等が数多くいる場合等は応相談となります。</li>
                    <li>
                        以下のいずれかの場合は、上限を55万円として増額させていただくことがございます。
                        <ul>
                            <li>明渡しが完了していない賃借事業所・店舗・倉庫・工場等がある場合</li>
                            <li>事業設備、機材、在庫、什器等の資産の保全が必要な場合</li>
                            <li>売掛金等の債権回収、保全が必要な場合</li>
                            <li>解雇していない従業員がいる場合</li>
                            <li>その他緊急に処理しなければならない事情がある場合</li>
                        </ul>
                    </li>
                </ul>
            </div>


            <!-- 03:会社解散 -->
            <div class="service__price-box">
                <?php service_price_title('会社解散'); ?>
                <h4 class="service__price-subtitle">着手金</h4>

                <?php price_table_2col([
                    ['項目', '料金'],
                    ['基本着手金', '88万円'],
                    ['営業所・店舗等の明渡し対応が必要となる場合', '明渡し未了の営業所等1か所につき追加16.5万円'],
                    ['従業員の退職・解雇対応が必要となる場合', '①従業員10名までの場合は、追加11万円<br>②従業員10名を超える場合は、①に加え、追加10名ごとに11万円'],
                    ['債権者数が20名を超える場合', '①債権者数が20名を超え40名までの場合は、追加11万円<br>②債権者数が40名を超える場合は、①に加え、10名ごとに追加6.5万円'],
                ]); ?>

                <ul class="service__price-list">
                    <li>報酬金はございません。</li>
                    <li>債権回収のために訴訟等を提起する場合は別途弁護士費用が発生します。</li>
                    <li>会社解散の登録免許税、清算人選任の登録免許税、官報広告費、司法書士に登記を依頼する場合のその司法書士費用、解散時における税務申告等を税理士に依頼する場合の税理士費用は別途ご負担いただきます。</li>
                </ul>
            </div>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->
