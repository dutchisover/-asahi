<?php get_header(); ?>

<div class="page__header">
    <div class="page__mv">
        <h1 class="page__title" data-fade="0">
            <em>404 Not Found</em>
            <span>お探しのページが見つかりません。</span>
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
            <span class="breadcrumb__current">お探しのページが見つかりません。</span>
        </div>
    </div>
    <!-- /.breadcrumb -->
</div>

<main class="main page__main">
    <?php
    echo '<div class="page-404">';
    ?>

    <section class="section about__philosophy" data-section-title="404">
        <!-- <h2 class="section__title" data-fade="100">
			<em>404 Not Found</em>
			<span>お探しのページが見つかりません。</span>
		</h2> -->

        <p class="about__philosophy-copy section__copy" data-fade="200">ページが「移動」もしくは「削除」されたか<br class="pc-none">「一時的にアクセスできない」可能性があります。</p>
        <p class="about__philosophy-copy section__copy" data-fade="300">恐れ入りますが、再度トップページから<br class="pc-none">アクセスをお願いいたします。</p>

    </section>



    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->

<?php get_footer(); ?>
