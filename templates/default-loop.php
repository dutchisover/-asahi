<?php defined('ABSPATH') || exit; ?>

<?php
/**
 * READ BEFORE EDITING!
 *
 * Do not edit templates in the plugin folder, since all your changes will be
 * lost after the plugin update. Read the following article to learn how to
 * change this template or create a custom one:
 *
 * https://getshortcodes.com/docs/posts/#built-in-templates
 */
?>

<div class="su-posts su-posts-default-loop <?php echo esc_attr($atts['class']); ?>">

    <?php if ($posts->have_posts()) : ?>

        <?php while ($posts->have_posts()) : ?>
            <?php $posts->the_post(); ?>

            <?php if (! su_current_user_can_read_post(get_the_ID())) : ?>
                <?php continue; ?>
            <?php endif; ?>

            <div id="su-post-<?php the_ID(); ?>" class="su-post <?php echo esc_attr($atts['class_single']); ?>">

                <?php if (has_post_thumbnail(get_the_ID())) : ?>
                    <a class="su-post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <?php endif; ?>

                <div class="su-post-meta">
                    <?php the_time(get_option('date_format')); ?>

                    <?php
                    $terms = get_the_terms(get_the_ID(), 'topics_taxonomy');
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
                    ?>
                    <span class="archive__item-taxonomy <?php echo esc_attr($taxonomy_class); ?>">
                        <?php echo esc_html($taxonomy_name); ?>
                    </span>
                </div>

                <p class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                <div class="su-post-excerpt">
                    <?php the_excerpt(); ?>
                </div>

                <?php if (have_comments() || comments_open()) : ?>
                    <a href="<?php comments_link(); ?>" class="su-post-comments-link"><?php comments_number(__('0 comments', 'shortcodes-ultimate'), __('1 comment', 'shortcodes-ultimate'), '% comments'); ?></a>
                <?php endif; ?>

            </div>

        <?php endwhile; ?>

    <?php else : ?>
        <h4><?php esc_html_e('Posts not found', 'shortcodes-ultimate'); ?></h4>
    <?php endif; ?>

</div>