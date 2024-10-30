<!-- <div class="topics__sidebar"> -->
<h2 class="topics__sidebar-title sp-none"><em>Category</em>カテゴリー別に見る</h2>
<?php
// 現在のカスタムタクソノミー用のタームを取得
$current_term = get_queried_object();
$current_term_slug = '';
$current_taxonomy = '';

// オブジェクトがタームの場合のみスラッグを設定
if (is_singular('topics')) {
    $terms = get_the_terms(get_the_ID(), 'topics_taxonomy');
    if ($terms && !is_wp_error($terms)) {
        $term = array_shift($terms);
        $current_term_slug = $term->slug;
        $current_taxonomy = 'topics_taxonomy';
    } else {
        // タクソノミーが選択されていない場合はお知らせを設定
        $current_term_slug = 'news';
        $current_taxonomy = 'topics_taxonomy';
    }
} else if (isset($current_term->term_id)) {
    $current_term_slug = $current_term->slug;
    $current_taxonomy = $current_term->taxonomy;
}

// お知らせのリンクを設定
$news_link = get_term_link('news', 'topics_taxonomy');
$news_active = ($current_taxonomy == 'topics_taxonomy' && $current_term_slug == 'news') ? 'current' : '';

// カテゴリーリストを取得
$topics_terms = get_terms(array(
    'taxonomy' => 'topics_taxonomy',
    'hide_empty' => false, // 空のタームを表示
    'orderby' => 'term_order', // 管理画面の順番に並べ替え
));

// タクソノミーリンクにcurrentクラスが付いているか確認
$taxonomy_current = '';
if ($current_taxonomy == 'topics_taxonomy' && $current_term_slug != 'news') {
    $taxonomy_current = 'current';
}
?>

<div class="topics__sidebar-content">
    <?php // if (!is_single()) :
    ?>
    <a class="topics__sidebar-button <?php if (is_post_type_archive('topics')) echo 'current'; ?> <?php echo $news_active; ?>" href="<?php home_url() ?>/topics/">すべて</a>
    <?php // endif;
    ?>
    <!-- <a class="topics__sidebar-button <?php echo $news_active; ?>" href="<?php echo esc_url($news_link); ?>">お知らせ</a> -->
    <a class="topics__sidebar-button" href="<?php echo esc_url($news_link); ?>">お知らせ</a>
    <div class="topics__sidebar-button topics__sidebar-button-column <?php echo $taxonomy_current; ?>">業務別コラム</div>

    <?php if (!empty($topics_terms) && !is_wp_error($topics_terms)) : ?>
        <div class="topics__sidebar-taxonomy">
            <?php foreach ($topics_terms as $term) : ?>
                <?php if ($term->slug !== 'news') : // newsを除外
                ?>
                    <?php $active_class = ($current_taxonomy == 'topics_taxonomy' && $current_term_slug == $term->slug) ? 'current' : ''; ?>

                    <?php
                    $term_name = esc_html($term->name);

                    // 全角かっこで囲まれた部分を <span class="subtext"> で囲う
                    $term_name_modified = preg_replace('/（.*?）/u', '<span class="subtext">$0</span>', $term_name);
                    ?>


                    <a class="topics__sidebar-link <?php echo $active_class; ?>" href="<?php echo esc_url(get_term_link($term)); ?>">
                        <p class="topics__sidebar-text">
                            <span class="sp-none">#</span>
                            <?php echo $term_name_modified; ?>
                        </p>
                    </a>

                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>
<!-- </div> -->
