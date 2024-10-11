<?php get_header(); ?>
<div class="page__header">
    <div class="page__mv">
        <h1 class="page__title" data-fade="0">
            <em>topics</em>
            <span>新着情報 一覧</span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-topics_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-topics.jpg" alt="" class="page__mv-bg" width="1800" height="502">
        </picture>
    </div>
    <!-- /.page__mv -->

    <!-- breadcrumb -->
    <div class="breadcrumb" data-fade="100">
        <div class="breadcrumb__inner">
            <a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
            <span class="breadcrumb__current">新着情報 一覧</span>
        </div>
    </div>
    <!-- /.breadcrumb -->
</div>


<main class="main page__main">
    <div class="archive-topics">
        <section class="archive__section section" data-section-title="News & Column">
            <p class="section__copy" data-fade="200">大阪・JR茨木駅徒歩2分。<br class="pc-none">相続・離婚・交通事故・会社顧問の法律相談<br>
                「茨木あさひ法律事務所」のブログです。<br>
                ニュースや事例など、最新情報をお届けいたします。</p>
            <div class="topics__content">

                <!-- sidebar -->
                <section class="topics__sidebar" data-fade="300">
                    <?php get_sidebar('topics'); ?>
                </section>

                <!-- 記事一覧 -->
                <div class="archive__container" data-fade="400">
                    <ul class="archive__list" data-fade="100">
                        <?php
                        if (wp_is_mobile()) {
                            //スマホ・タブレットの時
                            $num = 6;
                        } else {
                            //PCの時
                            $num = 9;
                        }
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'topics',
                            'posts_per_page' => $num,
                            'paged' => $paged
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

                                    //$taxonomy_nameの値の全角「（」から「）」までを削除
                                    $taxonomy_name = preg_replace('/（[^）]*）/', '', $taxonomy_name);

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
                                if (mb_strlen($content) > 70) {
                                    $content = mb_substr($content, 0, 70) . '...';
                                }
                        ?>
                                <li class="archive__item" data-fade="100">
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

                    <!-- .pagination -->
                    <div class="pagination" data-fade="100">
                        <?php
                            // ページネーションの表示
                            $big = 999999999; // need an unlikely integer
                            $pagination_args = array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'total' => $topics_query->max_num_pages,
                                'current' => $paged,
                                'mid_size' => 1,
                                'type' => 'list',
                                'prev_text' => __('<'),
                                'next_text' => __('>'),
                            );
                            echo paginate_links($pagination_args);
                        ?>
                    </div>
                    <!-- /.pagination -->

                <?php
                            wp_reset_postdata();
                        else :
                ?>
                    <p class="is-center">お知らせはありません。</p>
                <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- /.main -->

<?php get_footer(); ?>
