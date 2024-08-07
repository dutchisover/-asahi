<?php
function contact_add_files()
{
    $cache = date("Ymd-Gis");
    wp_enqueue_script('add_script', get_template_directory_uri() . '/assets/js/contact.js', "", $cache, true);
}

add_action('wp_enqueue_scripts', 'contact_add_files');
?>

<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<div class="page__header">
    <div class="page__mv">
        <h1 class="page__title">
            <em><?= get_the_title(); ?></em>
            <span><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-contact_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-contact.jpg" alt="" class="page__mv-bg" width="1800" height="502">
        </picture>
    </div>
    <!-- /.page__mv -->

    <div class="breadcrumb">
        <div class="breadcrumb__inner">
            <a href="<?php echo home_url(); ?>" class="breadcrumb__link">トップ</a>
            <span class="breadcrumb__current"><?= get_field("page-sub-title") ?></span>
        </div>
    </div>
    <!-- /.breadcrumb -->
</div>

<main class="main page__main">
    <?php
    echo '<div class="page-' . esc_attr($slug) . '">';
    ?>

    <section class="section" data-section-title="contact">
        <h2 class="section__title section__first-title">
            <em class="font-gothic-medium">お問い合わせ完了</em>
        </h2>
        <p class="section__copy">
            お問い合わせいただきありがとうございます。<br>
            ２営業日以内に連絡がない場合、メールがブロックされている恐れがありまので、<br>072-627-0101まで直接お電話をお願いいたします。
        </p>
        <div class="contact-form__button-area">
            <a href="/">TOPへ戻る</a>
        </div>

    </section>
    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->

<?php get_footer(); ?>