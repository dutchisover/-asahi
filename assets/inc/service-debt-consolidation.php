<?php

/**
 * Template Name: 借金・債務整理
 * slug: debt-consolidation
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
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-debt-consolidation_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-debt-consolidation.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

        <p class="service__copy"><em>借金・債務整理</em>にまつわる問題は<br class="pc-none">当事務所へお任せ下さい。<br><span>多数の解決実績に基づき、全力でサポートいたします。</span></p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-debt-consolidation-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-debt-consolidation-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>借金の返済が追いつかなくて不安</li>
                    <li>借金の督促がストレスで止めたい</li>
                    <li>自己破産した場合のメリット・デメリットを知りたい</li>
                    <li>債務整理をしたいが住宅を残せるかが心配</li>
                    <li>過払金の回収ができるか知りたい</li>
                    <li>５年以上返済をしていない債務を時効で消したい</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>当事務所は、自己破産／任意整理（借金の減額・分割払いの交渉）／個人再生（家を残したまま借金を減額）／過払金請求／消滅時効の援用／に精通しております。
                    ご依頼者様の状況を詳しくお伺いし、それぞれの解決手段のメリット・デメリットを踏まえて、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>借金・債務整理の取扱い業務</span>
        </h2>

        <p class="section__copy">当事務所では、借金・債務整理に関する各種問題を取り扱っております。<br>下記に列挙した取扱業務はその一例となります。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>任意整理</em>
                </h3>
                <p class="service__field-text">任意整理とは、裁判所における手続を利用せずに、債権者との話合いによって債務を整理する方法です。交渉によって、債務の支払期限を延期したり、支払額を調整するなどのリスケジュールを行ったり、将来利息をカットしてもらったりすることで、無理なく支払えるよう調整をします。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>自己破産</em>
                </h3>
                <p class="service__field-text">自己破産とは、支払不能となってしまった債務者が、手元にある資産で支払い切れない債務について、裁判所に免責（免除）を求める手続です。自己破産では、手元にある資産は一定のものを除いて弁済に充てる必要がありますが、非免責債権を除いて全ての債務を０にすることができます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>個人再生<span>（住宅資金特別条項）</span></em>
                </h3>
                <p class="service__field-text">個人再生とは、支払不能になってしまった債務者が、法律の定める要件を満たす金額を３～５年程度で支払う計画を立て、裁判所に認可してもらうことで債務を減免してもらう制度です。<br>個人再生を選択すべきケースは、住宅ローン付の不動産があり、住宅ローンを支払い続けてその不動産に住み続けたいため自己破産を選択できないような場合です。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>時効援用</em>
                </h3>
                <p class="service__field-text">金銭の借用について、最終取引日から５年以上が経過している場合、消滅時効を援用（使用）できる場合があります。<br>消滅時効を援用すると、その借金をこれ以上返す必要はありません。消滅時効を援用するときには、内容証明郵便等で債権者に時効を援用することを伝えます。</p>
            </div>
        </div>
    </section>

    <section class="section" data-section-title="case study">
        <h2 class="section__title">
            <em>case study</em>
            <span>借金・債務整理に関する事例や記事</span>
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
            <span>借金・債務整理の弁護士費用 (全て税込表記)</span>
        </h2>

        <div class="service__price-nav">
            <!-- <a href="" class="service__price-nav-link"></a> -->
        </div>

        <div class="service__price-container">
            <div class="service__price-box" id="anc-price-01">
                <?php service_price_title('相談料'); ?>

                <?php price_table_1col([
                    '相談料',
                    '無料',
                ]); ?>
                <ul class="service__price-list">
                    <li>個人の借金／債務整理については相談料を無料とさせていただいております</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('任意整理<span>（借金の減額・分割払いの交渉）</span>'); ?>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['5万5000円×債権者数', '2万2000円×債権者数＋減額額の11％'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('自己破産<span>（個人）</span>'); ?>
                <?php price_table_3col([
                    ['', '着手金', '報酬金'],
                    ['非個人事業主', '38万5000円', '11万円'],
                    ['個人事業主', '49万5000円', '11万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>報酬金は、裁判所により免責（借金の帳消し）された段階で頂戴いたします。</li>
                    <li>上記の他に別途裁判所費用として20万円程度が必要となります。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('個人再生'); ?>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['38万5000円', '22万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>着手金は月額5万5000円の分割払プランもご用意しております。</li>
                    <li>事業に基づく負債（住宅ローンは含まれません）が3000万円を超える場合は、別途裁判所費用として30万円程度が必要となります。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('過払金請求'); ?>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['0円', '【交渉の場合】<br>認容額の22％<br><br>【訴訟の場合】<br>認容額の27.5%'],
                ]); ?>
                <ul class="service__price-list">
                    <li>「認容額」とは、和解や認容判決等で最終的に認められた相手方の支払額をいいます。</li>
                </ul>
            </div>


            <div class="service__price-box">
                <?php service_price_title('消滅時効の援用'); ?>
                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['5万5000円×債権者数', '0円'],
                ]); ?>
            </div>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->
