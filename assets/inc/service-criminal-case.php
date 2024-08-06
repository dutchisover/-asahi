<?php

/**
 * Template Name: 刑事事件
 * slug: criminal-case
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
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-criminal-case_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service-criminal-case.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

        <p class="service__copy"><em>刑事事件</em>は当事務所へ<br class="pc-none">お任せ下さい。<br>
            <span>多数の解決実績に基づき、全力でサポートいたします。</span>
        </p>

        <div class="service__example">
            <div class="service__example-photo">
                <picture>
                    <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-criminal-case-01_sp.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/image_service-example-criminal-case-01.jpg" alt="" width="519" height="335">
                </picture>
            </div>

            <div class="service__example-info">
                <h2 class="service__example-title">
                    <em>Examples</em>
                    <span>お悩み事例</span>
                </h2>
                <ul class="service__example-list">
                    <li>身内が逮捕されてしまい連絡がとれない</li>
                    <li>示談交渉をしてほしい</li>
                    <li>不起訴にしてほしい</li>
                    <li>身柄を早く解放してほしい</li>
                    <li>職場／学校に知られたくない</li>
                    <li>前科をつけたくない</li>
                </ul>
                <a href="#anc-price" class="service__example-button">料金表はこちら</a>
            </div>

            <div class="service__example-desc">
                <p>当事務所は、不起訴を目指す弁護活動を得意としております。
                    窃盗事件、傷害事件、性犯罪など多数の事件で示談を成功させ、不起訴を獲得してきた実績があります。
                    刑事弁護はスピードが命になりますので、一人で悩まずにまずはご相談ください。
                    ご依頼者様に寄り添い、丁寧・スピーディに対応いたします。</p>
            </div>
        </div>

    </section>

    <section class="section" data-section-title="field of Service">
        <h2 class="section__title">
            <em>Field</em>
            <span>刑事事件の取扱い業務</span>
        </h2>

        <p class="section__copy">当事務所では、刑事事件に関する各種問題を取り扱っております。<br>下記に列挙した取扱業務はその一例となります。</p>

        <div class="service__field-list">
            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 01</span>
                    <em>接見（面会）</em>
                </h3>
                <p class="service__field-text">接見とは、身柄拘束を受けてしまった被疑者の話を聞くために、拘置所や、警察署等で面会を行うことをいいます。<br>
                    当事務所では、依頼を受けたら即座に接見を行い、被疑者とともに、親身になって弁護活動の方針を決め、速やかに弁護活動に着手します。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 02</span>
                    <em>身柄拘束からの解放</em>
                </h3>
                <p class="service__field-text">被疑者が身柄拘束を受けると、身体拘束期間中、警察署などで厳しい監視をされ、過酷な環境に置かれます。当事務所では、」このような被疑者、被告人の置かれる過酷な環境を理解し、早期釈放に向けてサポートします。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 03</span>
                    <em>示談活動</em>
                </h3>
                <p class="service__field-text">当事務所が最も得意としているのは示談活動です。被害者との示談活動は、早期の身柄釈放に有用であることはもちろん、不起訴となって刑事罰を受ける可能性をなくしたり、仮に起訴されてしまったとしてもより軽微な罰にとどめるために非常に重要です。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 04</span>
                    <em>保釈</em>
                </h3>
                <p class="service__field-text">保釈とは、起訴後に認められている身体拘束からの解放の手続です。当事務所では、裁判所に起訴状が受理されたら、直ちに保釈請求をできるよう準備を進めます。</p>
            </div>

            <div class="service__field-item">
                <h3 class="service__field-title">
                    <span>Field 05</span>
                    <em>少年事件</em>
                </h3>
                <p class="service__field-text">少年事件は、重大犯罪などで検察官送致をされる例を除いて、家庭裁判所で行われる少年審判という、少年事件に固有の手続きに付されることとなります。当事務所は、少年事件のサポートも行っています。</p>
            </div>
        </div>
    </section>

    <section class="section" data-section-title="case study">
        <h2 class="section__title">
            <em>case study</em>
            <span>刑事事件に関する事例や記事</span>
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
            <span>刑事事件の弁護士費用 (全て税込表記)</span>
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
                <?php service_price_title('初回接見料'); ?>
                <?php price_table_2col([
                    ['通常時の接見', '午後6時以降の接見'],
                    ['3万3000円', '6万6000円'],
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('成年刑事事件<span>（捜査弁護・公判弁護）</span>'); ?>

                <h4 class="service__price-subtitle">捜査弁護<span>（起訴されるまでの弁護活動）</span>：着手金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['身柄拘束されていない場合', '33万円'],
                    ['身柄拘束されている場合', '44万円'],
                    ['否認事件、裁判員裁判対象事件、複雑な事件の場合', '追加22万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>当事務所では、示談交渉を行う場合に追加の費用はいただいておりません。</li>
                    <li>示談交渉を行う場合の示談金は、別途ご負担いただきます（金額は事案によります）。</li>
                </ul>

                <h4 class="service__price-subtitle">捜査弁護<span>（起訴されるまでの弁護活動）</span>：報酬金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['不起訴', '49万5000円<br>（否認事件、裁判員裁判対象事件、複雑な事件の場合は71万5000円）'],
                    ['略式起訴', '38万5000円<br>（否認事件、裁判員裁判対象事件、複雑な事件の場合は60万5000円）'],
                    ['逮捕から4日以内の身柄解放', '33万円'],
                    ['逮捕から5日以降の身柄解放', '22万円'],
                    ['接見禁止の一部解除', '11万円'],
                ]); ?>

                <h4 class="service__price-subtitle">公判弁護<span>（起訴された以降の弁護活動）</span>：着手金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['罪を認めている事件', '44万円'],
                    ['否認事件、複雑な事件', '追加22万円'],
                    ['裁判員裁判対象事件', '追加44万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>保釈請求は3回までは料金をいただいておりません。4回目以降については、11万円／3回で承ります。
                    </li>
                </ul>

                <h4 class="service__price-subtitle">公判弁護<span>（起訴された以降の弁護活動）</span>：報酬金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['保釈が認められた場合', '22万円'],
                    ['執行猶予・罰金刑の場合', '44万円<br>（否認事件の場合は追加11万円）<br>（裁判員裁判で執行猶予となった場合は追加22万円）'],
                    ['実刑で求刑の80％以下に減刑した場合', '33万円'],
                    ['無罪判決の場合', '110万円'],
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('少年事件<span>（家庭裁判所送致前・送致後）</span>'); ?>

                <h4 class="service__price-subtitle">家庭裁判所送致前：着手金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['身柄拘束されていない場合', '33万円'],
                    ['身柄拘束されている場合', '44万円'],
                    ['否認事件、裁判員裁判対象事件、複雑な事件の場合', '追加22万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>当事務所では、示談交渉を行う場合に追加の費用はいただいておりません。</li>
                    <li>示談交渉を行う場合の示談金は、別途ご負担いただきます（金額は事案によります）。</li>
                </ul>

                <h4 class="service__price-subtitle">家庭裁判所送致前：報酬金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['家庭裁判所に送致されなかった場合', '49万5000円<br>（否認事件、裁判員裁判対象事件など複雑な事件の場合は71万5000円）'],
                    ['逮捕から4日以内の身柄解放', '33万円'],
                    ['逮捕から5日以降の身柄解放', '22万円'],
                    ['接見禁止の一部解除', '11万円'],
                ]); ?>

                <h4 class="service__price-subtitle">家庭裁判所送致後：着手金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['罪を認めている事件', '44万円'],
                    ['否認事件、複雑な事件', '追加22万円'],
                    ['裁判員裁判対象事件', '追加44万円'],
                ]); ?>
                <ul class="service__price-list">
                    <li>保釈請求は3回までは料金をいただいておりません。４回目以降については、11万円／3回で承ります。</li>
                </ul>

                <h4 class="service__price-subtitle">家庭裁判所送致後：報酬金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['監護措置（少年鑑別所）からの身柄解放', '22万円'],
                    ['審判不開始又は不処分', '49万5000円<br>（否認事件の場合は追加33万円）<br>（裁判員裁判対象事件の場合は追加22万円）'],
                    ['保護観察', '38.5万円'],
                    ['少年院送致又は少年院以外の施設送致', '33万円'],
                    ['非行事実の一部について認定されなかったとき又は非行事実とされていた罪名よりも法定刑の軽い非行事実が認定されたとき', '22万円'],
                    ['検察官逆送回避', '77万円'],
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('上訴する場合'); ?>
                <h4 class="service__price-subtitle">着手金</h4>
                <?php price_table_1col([
                    '着手金',
                    '55万円',
                ]); ?>

                <h4 class="service__price-subtitle">報酬金</h4>
                <?php price_table_2col([
                    ['内容', '料金'],
                    ['無罪判決の場合', '110万円'],
                    ['事実関係を争い、原審判決よりも軽い刑が言い渡された場合', '55万円'],
                    ['量刑を争い、原審判決よりも軽い刑が言い渡された場合', '33万円'],
                    ['上記以外で原審判決が破棄された場合', '22万円'],
                    ['保釈が認められた場合', '22万円'],
                ]); ?>
            </div>


            <div class="service__price-box">
                <?php service_price_title('捜査・逮捕前契約'); ?>

                <p class="service__price-text">捜査・逮捕前契約とは、まだ事件化していない状態で、今後捜査が開始し、あるいは逮捕される可能性がある場合に、ご契約後期間中（3か月間）必要に応じてアドバイスを行う契約です。<br>ご契約いただくことで捜査開始後に迅速な対応が可能となり、ご契約期間中に万が一逮捕されてしまった場合は、弁護士が警察署に急行し、接見をいたします。</p>

                <?php price_table_2col([
                    ['着手金', '報酬金'],
                    ['13万2000円／3か月<br>（接見1回分の費用を含む）', '0円'],
                ]); ?>

                <ul class="service__price-list">
                    <li>捜査・逮捕前契約は、まだ事件化していない状態が対象となり、既に警察から事情聴取を受けている、あるいは任意出頭の連絡を受けている場合は、通常の成年刑事事件・少年事件でのご依頼となります。</li>
                    <li>ご契約期間中は、着手金に接見1回分の費用が含まれております。なお、ご契約期間の終了後に逮捕された場合の初回接見は、上記の「初回接見料」記載の金額にて承ります。</li>
                </ul>
            </div>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->
