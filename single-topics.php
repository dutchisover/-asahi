<?php
function blog_add_files()
{
    $cache = date("Ymd-Gis");
    wp_enqueue_style('add_blog_style', get_template_directory_uri() . '/assets/css/add.css', "", $cache, 'all');
}

add_action('wp_enqueue_scripts', 'blog_add_files');
?>

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

    <div class="breadcrumb" data-fade="100">
        <div class="breadcrumb__inner">
            <a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
            <a href="<?php echo home_url(); ?>/topics/" class="breadcrumb__link">新着情報 一覧</a>
            <span class="breadcrumb__current"><?php the_title() ?></span>
        </div>
    </div>
    <!-- /.breadcrumb -->
</div>

<main class="main page__main">
    <div class="single-topics">
        <section class="section" data-section-title="News & Column">
            <div class="topics__content">
                <!-- sidebar -->
                <section class="topics__sidebar sp-none" data-fade="200">
                    <?php get_sidebar('topics'); ?>
                </section>
                <!-- メインコンテンツ -->
                <article class="single__container">
                    <div class="single__inner" data-fade="300">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) : the_post();

                                // アイキャッチ画像情報を取得
                                $single_image = get_the_post_thumbnail($post->ID, 'full');
                                if (!$single_image) {
                                    $single_image = '';
                                }
                                // タクソノミーの選択がない場合は "お知らせ" を表示
                                $taxonomy_name = 'お知らせ'; // デフォルトは "お知らせ"
                                $taxonomy_class = 'taxonomy-news'; // デフォルトの背景色クラス
                                $term_link = get_term_link('news', 'topics_taxonomy'); // デフォルトのリンク

                                // カスタムタクソノミーの取得
                                $terms = get_the_terms(get_the_ID(), 'topics_taxonomy');

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
                                    $term_link = get_term_link($term->slug, 'topics_taxonomy');
                                }
                        ?>
                                <!-- 記事タイトル部分 -->
                                <h2 class="single__title"><?php the_title(); ?></h2>
                                <p class="single__date">
                                    <a class="single__taxonomy <?php echo esc_attr($taxonomy_class); ?>" href="<?php echo esc_url($term_link); ?>">
                                        <?php echo esc_html($taxonomy_name); ?>
                                    </a>
                                    <time data-time="<?php echo get_the_date('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                                </p>
                                <span class="single__line"></span>

                                <!-- 記事監修者 アコーディオン -->
                                <dl class="single__editor js-accordion">
                                    <dt class="single__editor-header js-accordion__header" tabindex="0" aria-expanded="false">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/photo_topics-editor.jpg?01" alt="記事監修者 : 茨木あさひ法律事務所 代表弁護士 谷井 光" class="single__editor-image">
                                        <div class="single__editor-name">
                                            <p>記事監修者 : 茨木あさひ法律事務所</p>
                                            <p class="single__editor-name"><span>代表弁護士</span>谷井 光</p>
                                        </div>
                                    </dt>
                                    <dd class="single__editor-content js-accordion__content">
                                        <div class="single__editor-inner">
                                            <p class="single__editor-text">弁護士登録後、都内の総合法律事務所で経験を積み、茨木あさひ法律事務所を創業。相続、交通事故、労働問題が得意分野。趣味は、ゴルフ、サウナ。立命館大学経営学部卒業、神戸大学法科大学院修了。<br>
                                                <br>
                                                保有資格<br>
                                                ・弁護士（大阪弁護士会所属：登録番号62348）<br>
                                                ・宅地建物取引士
                                            </p>

                                            <div class="button__area">
                                                <a href="<?php echo esc_url(home_url()); ?>/contact" class="button__link">無料相談はこちら</a>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                                <!-- 記事監修者 アコーディオンここまで -->

                                <!-- アイキャッチ画像 -->
                                <?php if ($single_image) : ?>
                                    <div class="single__image" data-fade="100">
                                        <?php echo $single_image; ?>
                                    </div>
                                <?php endif; ?>
                                <!-- 記事内容 -->
                                <div class="single__content">
                                    <?php
                                    the_content();
                                    ?>
                                </div>

                                <!-- 弁護士プロフィール -->
                                <?php
                                get_template_part('/assets/inc/inc-profile');
                                ?>

                                <?php
                                get_template_part('/assets/inc/inc-cta-button');
                                ?>

                        <?php
                            endwhile;
                        }
                        ?>
                    </div>
                </article>
            </div>
            <!-- /.single -->
        </section>
    </div>
</main>


<?php get_footer(); ?>
