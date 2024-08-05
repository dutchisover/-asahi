<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<div class="page__header">
    <div class="page__mv">
        <h1 class=" page__title">
            <em><?= get_the_title(); ?></em>
            <span><?= get_field("page-sub-title") ?></span>
        </h1>

        <picture>
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-service.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

    <section class="section" data-section-title="Our Service">

        <p class="section__copy">個人のお客様、法人のお客様を問わず、幅広い案件を取り扱っております。<br class="sp-none">業務分野の詳細については以下の各項目をご覧下さい。</p>

        <div class="service__content">
            <?php
            // 親ページのスラッグを指定
            $parent_slug = 'service';

            // 親ページのIDを取得
            $parent_page = get_page_by_path($parent_slug);
            $parent_id = $parent_page->ID;

            // 子ページを取得
            $args = array(
                'post_type' => 'page',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'post_parent' => $parent_id,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $child_pages = new WP_Query($args);

            // 子ページのタイトル、リンク、画像、説明文を出力
            if ($child_pages->have_posts()) {
                echo '<div class="service__list">';
                $counter = 1; // 連番用カウンター

                while ($child_pages->have_posts()) {
                    $child_pages->the_post();

                    // 投稿IDを取得
                    $post_id = get_the_ID();
                    // var_dump($post_id);

                    // ACFフィールドから画像を取得
                    $page_mv_pc = get_field('page-mv-pc', $post_id);
                    if (empty($page_mv_pc)) {
                        $page_mv_pc = get_template_directory_uri() . '/assets/image/no-image.jpg';
                    }
                    $page_mv_sp = get_field('page-mv-sp', $post_id);
                    if (empty($page_mv_sp)) {
                        $page_mv_sp = get_template_directory_uri() . '/assets/image/no-image_sp.jpg';
                    }
                    $description = get_field('page-description', $post_id);
                    // アンカーリンクIDを生成
                    $anchor_id = 'anc-' . str_pad($counter, 2, '0', STR_PAD_LEFT);

                    echo '<div class="service__item" id="' . esc_attr($anchor_id) . '">';
                    echo '<div class="service__item-photo">';
                    echo '<picture>';
                    // echo '<source media="(max-width:820px)" srcset="' . esc_url($page_mv_sp['url']) . '">';
                    // echo '<img src="' . esc_url($page_mv_pc['url']) . '" alt="' . get_the_title() . '" class="service__item-image">';
                    // echo '</picture>';
                    echo '</div>';

                    echo '<div class="service__item-info">';
                    echo '<h3 class="service__item-title">';
                    echo '<span>Service # </span>';
                    echo '<em>' . get_the_title() . '</em>';
                    echo '</h3>';
                    echo '<p class="service__item-text">' . esc_html($description) . '</p>';
                    echo '<a href="' . get_permalink() . '" class="service__item-button">詳しく見る</a>';
                    echo '</div>';
                    echo '</div>';

                    $counter++;
                }
                echo '</div>';

                // サイドバーリンクを出力
                echo '<div class="service__sidebar">';
                echo '<h2 class="service__sidebar-title"><span class="sp-none">取り扱い業務 一覧</span><span class="pc-none">Category</span></h2>';

                $counter = 1;
                while ($child_pages->have_posts()) {
                    $child_pages->the_post();

                    // アンカーリンクIDを生成
                    $anchor_id = 'anc-' . str_pad($counter, 2, '0', STR_PAD_LEFT);

                    echo '<a href="#' . esc_attr($anchor_id) . '" class="service__sidebar-link">' . get_the_title() . '</a>';

                    $counter++;
                }

                echo '<a href="#anc-flow" class="service__sidebar-button">ご契約の流れはこちら</a>';

                echo '</div>';
            }

            // クエリをリセット
            wp_reset_postdata();
            ?>
        </div>

    </section>


    <section class="section" data-section-title="Flow" id="anc-flow">
        <h2 class="section__title">
            <em>Flow</em>
            <span>ご相談までの流れ</span>
        </h2>

        <p class="section__copy">総合法律事務所として、法人案件・個人案件を問わず、<br>幅広い案件を取り扱っております。</p>

        <div class="service__flow-list">
            <div class="service__flow-item">
                <h3 class="service__flow-title">
                    <span>Step 01</span>
                    <em>まずはお電話にてお問い合わせ下さい</em>
                </h3>

                <p class="service__flow-text">事務局が電話対応しますので、弁護士に相談したい分野（相続、遺言作成、不動産、企業顧問、その他）及び近日中にお打ち合わせが可能な日程をお伝えください。<br>担当弁護士から相談可能な日程についてご連絡させていただきます。<br>なお、当事務所では、お電話のみでの法律相談は原則として</p>
            </div>

            <div class="service__flow-item">
                <h3 class="service__flow-title">
                    <span>Step 02</span>
                    <em>電話で事案の概要をお伺いします</em>
                </h3>

                <p class="service__flow-text">弁護士が事案の概要をお伺いし、面談の日程調整をさせていただきます。<br>※当事務所ではお電話での法律相談はお受けしておらず、正式な法律相談はご来所いただいてからとなります。<br>※利益相反の確認のため、お電話の初めにお問合せいただいた方の氏名と相手方となる方の氏名をお伺いいたします。</p>
            </div>

            <div class="service__flow-item">
                <h3 class="service__flow-title">
                    <span>Step 03</span>
                    <em>事務所へお越しください</em>
                </h3>

                <p class="service__flow-text">事務所にてより詳しくお話をお伺いし、法律相談をいたします。<br>当事務所はJR茨木駅より徒歩2分です。</p>
            </div>
        </div>
    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->

<?php get_footer(); ?>
