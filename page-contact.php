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
        <h1 class="page__title" data-fade="0">
            <em><?= get_the_title(); ?></em>
            <span><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-contact_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-contact.jpg" alt="" class="page__mv-bg" width="1800" height="502">
        </picture>
    </div>
    <!-- /.page__mv -->

    <div class="breadcrumb" data-fade="100">
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

        <div class="contact-top">
            <h2 class="section__title section__first-title" data-fade="200">
                <em class="font-gothic-medium">初回30分 相談無料</em>
                <span>お気軽にご相談ください！</span>
            </h2>

            <p class="section__copy" data-fade="300">
                ご相談・お問い合わせは、お電話またはメールにて承っています。<br>
                法律相談をご希望される場合は、初めに「法律相談を希望します」とお伝えください。<br>
                コンタクトフォームでのお問い合わせは24時間年中お受けしております。
            </p>

            <div class="contact-top__content" data-fade="400">
                <div class="contact-top__content-inner">
                    <div class="contact-top__header">お電話でのお問い合わせ</div>
                    <div class="contact-top__body">
                        <div class="contact-top__body-tel">072-627-0101</div>
                        <div class="contact-top__body-text">受付時間 9 : 00 - 18:00 (土日祝休)</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" data-section-title="contact form" id="anc-flow">
        <h2 class="section__title" data-fade="100">
            <em>contact form</em>
            <span>お問い合わせフォームはこちら</span>
        </h2>

        <p class="section__copy" data-fade="200">
            ２営業日以内に連絡がない場合、メールがブロックされている恐れがありまので、<br>072-627-0101まで直接お電話をお願いいたします。
        </p>
        <div class="contact__form" data-fade="300">
            <?php echo do_shortcode('[contact-form-7 id="8bbf352" title="お問い合わせフォーム"]'); ?>
        </div>

    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->

<?php get_footer(); ?>
