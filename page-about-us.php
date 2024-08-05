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
            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-about_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/bg_page-mv-about.jpg" alt="" class="page__mv-bg" width="1800" height="502">
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

    <section class="section about__philosophy" data-section-title="Philosophy">
        <h2 class="section__title">
            <em>Philosophy</em>
            <span>理念</span>
        </h2>

        <p class="about__philosophy-copy section__copy">当事務所はご依頼者様の視点に立った<br class="pc-none">質の高い法的サービスを提供し、<br>「朝日」のようにご依頼者様の未来を照らす存在となることを理念としています。</p>

        <picture>
            <source media="(max-width: 768px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/photo_about-01_sp.jpg">
            <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_about-01.jpg" alt="" class="about__philosophy-image" width="1104" height="379">
        </picture>

    </section>


    <section class="section about__feature" data-section-title="Our Features">
        <h2 class="section__title">
            <em>Features</em>
            <span>当事務所の特徴</span>
        </h2>

        <div class="about__feature-container">
            <div class="about__feature-box">
                <div class="about__feature-info">
                    <h3 class="about__feature-title">分かりやすく丁寧な対応</h3>
                    <p class="about__feature-text">相談したのに結局何をしてくれるかわからない。<br>そのような思いをお客様にさせないため、当事務所では、法律相談時に図を描きながら解決の流れを分かりやすく説明しています。また、ご依頼後も進捗報告を怠らず、安心いただけるよう丁寧な対応を心がけています。</p>
                </div>

                <div class="about__feature-photo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_about-feature-01.jpg" alt="" width="430" height="272">
                </div>
            </div>

            <div class="about__feature-box">
                <div class="about__feature-info">
                    <h3 class="about__feature-title">交渉による早期解決に注力</h3>
                    <p class="about__feature-text">あまり揉めずに早く問題を解決したい。<br>そのようなニーズに応えるため、交渉による早期解決には特に注力しています。実際に、多数の和解による解決実績があります。</p>
                </div>

                <div class="about__feature-photo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_about-feature-02.jpg" alt="" width="430" height="272">
                </div>
            </div>

            <div class="about__feature-box">
                <div class="about__feature-info">
                    <h3 class="about__feature-title">安心の料金体系</h3>
                    <p class="about__feature-text">安心してご相談・ご依頼いただくため、わかりやすい料金体系にしております。法律相談料も<em>初回３０分は無料</em>です。来所予約の際にも費用の説明をいたします。</p>
                    <a href="<?= home_url(); ?>/price" class="about__feature-button">弁護士費用はこちら</a>
                </div>

                <div class="about__feature-photo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_about-feature-03.jpg" alt="" width="430" height="272">
                </div>
            </div>

            <div class="about__feature-box">
                <div class="about__feature-info">
                    <h3 class="about__feature-title">JR茨木駅から徒歩２分</h3>
                    <p class="about__feature-text">当事務所はJR茨木駅から徒歩２分に位置しています。茨木市以外からでもなるべく少ないご負担でご来所いただけます。</p>
                    <a href="<?= home_url(); ?>/office#anc-access" class="about__feature-button">アクセスはこちら</a>
                </div>

                <div class="about__feature-photo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_about-feature-04.jpg" alt="" width="430" height="272">
                </div>
            </div>
        </div>

    </section>


    <section class="section about__lawyer" data-section-title="lawyer" id="anc-lawyer">
        <h2 class="section__title">
            <em>lawyer</em>
            <span>弁護士のご紹介</span>
        </h2>

        <div class="about__lawyer-container">
            <div class="about__lawyer-photo">
                <img src="<?= get_template_directory_uri(); ?>/assets/image/photo_about-lawyer-01.jpg" alt="" class="about__lawyer-image" width="385" height="483">
            </div>

            <div class="about__lawyer-info">
                <h3 class="about__lawyer-name">
                    <strong>代表弁護士</strong>
                    <em>谷井 光<span>Hikaru Tanii</span></em>
                </h3>
                <div class="about__lawyer-text">
                    <h4>依頼者最優先主義</h4>
                    <p>ご依頼者様が「弁護士に依頼をして何を実現したいのか」を常に考えて職務を行っています。<br>「揉めずに早く紛争を解決したい」「時間をかけてでも納得のいく解決をしたい」など、ご要望を的確に把握しなければベストな解決の提供は困難です。<br>ご依頼者様の気持ちに寄り添い、誠実に対応することを信条としています。</p>
                    <h4>コミュニケーションを大切にし、<br>解決の「過程」にもこだわる</h4>
                    <p>ご依頼者様が求める結果にこだわることは弁護士としての当然の責務です。<br>しかし、たとえ同じ結果を弁護士が導くとしても、その結果に至る過程をどのように辿るかによってご依頼者様の事件解決への満足感は大きく変わります。<br>結果に向けてベストを尽くすだけでなく、結果に至る過程でもご安心いただけるよう、丁寧な説明・クイックレスポンス・こまめな進捗報告を徹底しています。</p>
                </div>
            </div>

            <div class="about__lawyer-history">
                <h3 class="about__lawyer-title"><em>HISTORY</em><span>経歴</span></h3>
                <div class="about__lawyer-data">
                    <dl>
                        <dt>出身地</dt>
                        <dd>滋賀県</dd>
                    </dl>
                    <dl>
                        <dt>学歴</dt>
                        <dd>滋賀県立水口東高等学校卒業<br>
                            立命館大学　経営学部 経営学科卒業<br>
                            神戸大学法科大学院修了</dd>
                    </dl>
                    <dl>
                        <dt>所属団体</dt>
                        <dd>大阪弁護士会</dd>
                    </dl>
                    <dl>
                        <dt>趣味</dt>
                        <dd>ゴルフ、サウナ（週２以上）、キャンプ</dd>
                    </dl>
                    <dl>
                        <dt>資格</dt>
                        <dd>弁護士、宅地建物取引士</dd>
                    </dl>
                    <dl>
                        <dt>職歴</dt>
                        <dd>
                            <em class="pc-none">2024年8月</em>
                            弁護士法人葛飾総合法律事務所　入所
                            <span>東京都葛飾区にある区内最大の総合法律事務所です。相続、交通事故、労働問題、男女問題、不動産、金銭トラブル、借金（個人・法人）、刑事事件、企業顧問等、幅広い事件を解決</span>
                            <em class="pc-none">2024年8月</em>
                            茨木あさひ法律事務所　創設
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <?php
    echo '</div>';
    ?>

</main>
<!-- /.main -->

<?php get_footer(); ?>