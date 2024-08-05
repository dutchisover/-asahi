<?php get_header(); ?>

<?php

// ページオブジェクトを取得
$page = get_post();

// ページのスラッグを取得
$slug = $page->post_name;

// スラッグを使ってファイルパスを作成
$file_path = get_template_directory() . '/assets/inc/service-' . $slug . '.php';

// ファイルが存在するか確認してインクルード
if (file_exists($file_path)) {
    include($file_path);
} else {
    echo '<p>該当するサービスページが見つかりません。</p>';
}

?>


<?php get_footer(); ?>
