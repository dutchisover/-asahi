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
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-policy_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-policy.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

    <section class="section" data-section-title="Our policy">
        <div class="section__privacy">
            <h2 class="section__title" id="anc-privacy" data-fade="200">
                <em>privacy policy</em>
                <span>プライバシーポリシー</span>
            </h2>

            <div class="section__privacy-inner" data-fade="300">
                <p>茨木あさひ法律事務所（以下「当事務所」といいます。）は、個人情報保護の重要性を認識し、個人情報を取り扱うにあたって、個人情報の保護に関する法律をはじめ、関係法令を遵守し、以下の通り定め、個人情報の適切な取扱いに努めます。</p>

                <hr class="hr-main">

                <h3>1. 個人情報の利用目的</h3>
                <p>
                    当事務所は、以下の目的の達成に必要な範囲で、個人情報を利用します。<br>
                    （1）法律業務の提供<br>
                    （2）当事務所の挨拶状等の送付<br>
                    （3）当事務所の弁護士又は事務職員の採用活動、労務管理等<br>
                    （4）各種お問合せ対応<br>
                    （5）その他上記目的に付随する目的<br>
                </p>
                <hr class="hr-sub">

                <h3>2. 個人情報の管理</h3>
                <p>当事務所は、個人情報の漏えい、滅失又は毀損の防止その他の個人情報の安全管理のために必要かつ適切な措置をとります。</p>
                <hr class="hr-sub">

                <h3>3. 第三者利用の制限</h3>
                <p>当事務所は、法令に基づく場合を除き、あらかじめご本人の同意を得ることなく、個人情報を第三者へ提供いたしません。</p>
                <hr class="hr-sub">

                <h3>4. 個人情報の開示、訂正、利用停止等のお求め</h3>
                <p>当事務所は、ご本人から個人情報の開示、訂正、追加、削除又は利用停止などを求められた場合、法令に基づき適切に対処いたします。</p>
                <hr class="hr-sub">

                <h3>5. お問合せ窓口</h3>
                <p>茨木あさひ法律事務所<br>
                    住所：大阪府茨木市西駅前町５番３６号　茨木高橋ビル８階東<br>
                    電話：０７２－６２７－０１０１<br>
                    受付時間：平日９時～１８時</p>
                <hr class="hr-sub">

                <h3>6. プライバシーポリシーの変更</h3>
                <p>当事務所は、必要に応じ、プライバシーポリシーの変更を行うことがあります。</p>

            </div>

            <?php /*
            <div class="section__site">
                <h2 class="section__title" id="anc-site">
                    <em>site policy</em>
                    <span>サイトポリシー</span>
                </h2>

                <div class="section__privacy-inner">
                    <p>当Webサイト（以下、「当サイト」）は、弁護士法人おおたか総合法律事務所（以下、「当事務所」）が運営・管理しております。当サイトを利用される際には、下記の事項を必ずお読みください。<br>
                        当サイトのコンテンツを利用された場合は、下記の事項に同意されたものとみなします。<br>
                        なお、当ページに掲載している内容は予告なしに変更する場合があります。予めご了承ください。</p>
                </div>
            </div>
*/ ?>
        </div>
    </section>







    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->

<?php get_footer(); ?>
