	<!DOCTYPE html>
	<html lang="ja" prefix="og: http://ogp.me/ns#">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <!-- Google Tag Manager -->
	    <script>
	        (function(w, d, s, l, i) {
	            w[l] = w[l] || [];
	            w[l].push({
	                'gtm.start': new Date().getTime(),
	                event: 'gtm.js'
	            });
	            var f = d.getElementsByTagName(s)[0],
	                j = d.createElement(s),
	                dl = l != 'dataLayer' ? '&l=' + l : '';
	            j.async = true;
	            j.src =
	                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
	            f.parentNode.insertBefore(j, f);
	        })(window, document, 'script', 'dataLayer', 'GTM-NQGFXT8M');
	    </script>
	    <!-- End Google Tag Manager -->

	    <!-- Web Fonts -->
	    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?5ff66db6807442a0aa8a3222e90393a3" charset="utf-8"></script>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Google Tag Manager -->
	    <script>
	        (function(w, d, s, l, i) {
	            w[l] = w[l] || [];
	            w[l].push({
	                'gtm.start': new Date().getTime(),
	                event: 'gtm.js'
	            });
	            var f = d.getElementsByTagName(s)[0],
	                j = d.createElement(s),
	                dl = l != 'dataLayer' ? '&l=' + l : '';
	            j.async = true;
	            j.src =
	                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
	            f.parentNode.insertBefore(j, f);
	        })(window, document, 'script', 'dataLayer', 'GTM-NQGFXT8M');
	    </script>
	    <!-- End Google Tag Manager -->
	    <!-- Web Fonts -->
	    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?5ff66db6807442a0aa8a3222e90393a3" charset="utf-8"></script>

	    <?php get_template_part('inc/inc-tag-head'); ?>

	    <?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	    <!-- Google Tag Manager (noscript) -->
	    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQGFXT8M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	    <!-- End Google Tag Manager (noscript) -->
	    <!-- Google Tag Manager (noscript) -->
	    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQGFXT8M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	    <!-- End Google Tag Manager (noscript) -->

	    <?php get_template_part('inc/inc-tag-body'); ?>

	    <?php if (is_home() || is_front_page()) : ?>
	        <div id="splash">
	            <div id="splash_text">
	                <img src="<?= get_template_directory_uri(); ?>/assets/image/logo_loading.svg" alt="茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" width="189" height="265">
	            </div>
	        </div>
	    <?php endif; ?>

	    <header class="header">
	        <p class="header__description pc-none">茨木市の弁護士 相続・離婚・交通事故・会社顧問の法律相談</p>

	        <div class="header__inner">
	            <?php if (is_home() || is_front_page()) : ?>
	                <h1 class="header__logo">
	                    <a href="<?= home_url(); ?>">
	                        <picture>
	                            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/logo_sp.svg">
	                            <img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="茨木市の弁護士  相続・離婚・交通事故・会社顧問の法律相｜談茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="348" height="67">
	                        </picture>
	                    </a>
	                </h1>
	            <?php else : ?>
	                <div class="header__logo">
	                    <a href="<?= home_url(); ?>">
	                        <picture>
	                            <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/logo_sp.svg">
	                            <img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="茨木市の弁護士  相続・離婚・交通事故・会社顧問の法律相談｜茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="348" height="67">
	                        </picture>
	                    </a>
	                </div>
	            <?php endif; ?>

	            <div class="header__container">
	                <div class="header__container-inner">
	                    <nav class="header__nav">
	                        <ul class="header__nav-list">
	                            <li class="header__nav-item">
	                                <a href="<?= home_url(); ?>/" data-subtitle="Top Page" data-current=""><span class="sp-none">ホーム</span><span class="pc-none">トップページ</span></a>
	                            </li>
	                            <li class="header__nav-item">
	                                <a href="<?= home_url(); ?>/about-us" data-subtitle="Lawyer" data-current="about">弁護士紹介</a>
	                            </li>
	                            <!-- <li class="header__nav-item sp-none">
									<a href="<?= home_url(); ?>/service" data-subtitle="Service" data-current="service"><span>取り扱い業務<span class="pc-none"> 一覧</span></span></a>
								</li> -->
	                            <li class="header__nav-item is-sub-nav">
	                                <a href="<?= home_url(); ?>/service" data-subtitle="Service" data-current="service"><span>取り扱い業務<span class="pc-none"> 一覧</span></span></a>

	                                <ul class="header__nav-sub">
	                                    <li class="header__nav-sub-item is-all">
	                                        <a href="<?= home_url(); ?>/service">
	                                            <div class="pc-none">すべてを見る</div>
	                                            <div class="sp-none">取扱業務一覧ページはこちら</div>
	                                        </a>
	                                    </li>


	                                    <?php
                                        // 固定ページ「service」の子ページを全て取得し、$service_child に格納
                                        $service_child = get_pages(array(
                                            'child_of' => get_page_by_path('service')->ID,
                                            'sort_column' => 'menu_order',
                                            'sort_order' => 'asc'
                                        ));

                                        // .header__nav-sub-item の内容を $service_child にそれぞれ置換え
                                        if (!empty($service_child)) {
                                            foreach ($service_child as $page) {
                                                $page_url = get_permalink($page->ID);
                                                $page_title = $page->post_title;
                                                // 全角の括弧（）を <span> で囲む
                                                $page_title = preg_replace('/（(.*?)）/', '<span>（$1）</span>', $page_title);

                                                echo '<li class="header__nav-sub-item">';
                                                echo '<a href="' . esc_url($page_url) . '">' . $page_title . '</a>';
                                                echo '</li>';
                                            }
                                        }
                                        ?>
	                                </ul>

	                            </li>
	                            <li class="header__nav-item">
	                                <a href="<?= home_url(); ?>/price" data-subtitle="Price" data-current="price">料金</a>
	                            </li>
	                            <li class="header__nav-item">
	                                <a href="<?= home_url(); ?>/office" data-subtitle="Office & Access" data-current="office">事務所概要</a>
	                            </li>
	                            <?php if (has_topics_query()): ?>
	                                <li class="header__nav-item">
	                                    <a href="<?= home_url(); ?>/topics" data-subtitle="Topicks" data-current="topics"><span>新着情報<span class="pc-none"> 一覧</span></span></a>
	                                </li>
	                            <?php endif; ?>
	                        </ul>
	                    </nav>

	                    <div class="header__contact">
	                        <a href="tel:072-627-0101" class="header__contact-tel">
	                            <strong><span>TEL :</span>072-627-0101</strong>
	                            <em>受付時間 9:00 - 18:00 (土日祝定休)</em></a>

	                        <a href="<?= home_url(); ?>/contact" class="header__contact-button"><span class="pc-none">メールで</span>お問い合わせ</a>

	                        <address class="header__contact-address pc-none">
	                            <span>〒567-0032</span>
	                            <em>大阪府茨木市西駅前町５番３６号 茨木高橋ビル８階東</em>
	                            <a href="https://maps.app.goo.gl/JGktHu7LFDC4Vqxb9" target="_blank" rel="noopener noreferrer">Googlemapでみる</a>
	                        </address>
	                    </div>
	                </div>
	            </div>
	        </div>




	        <div class="header__nav-button-area">
	            <button class="header__nav-button pc-none">
	                <img src="<?= get_template_directory_uri(); ?>/assets/image/button_header-nav.svg" alt="メニューを開く" width="115" height="115">
	            </button>
	            <button class="header__nav-button-close header__nav-button pc-none">
	                <img src="<?= get_template_directory_uri(); ?>/assets/image/button_header-nav_close.svg" alt="メニューを閉じる" width="115" height="115">
	            </button>
	        </div>
	    </header>


	    <div class="floating-header header sp-none">
	        <div class="floating-header__inner">
	            <p class="header__description pc-none">茨木市の弁護士 相続・離婚・交通事故・会社顧問の法律相談</p>

	            <div class="header__inner">
	                <?php if (is_home() || is_front_page()) : ?>
	                    <h1 class="header__logo">
	                        <a href="<?= home_url(); ?>">
	                            <picture>
	                                <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/logo_sp.svg">
	                                <img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="茨木市の弁護士  相続・離婚・交通事故・会社顧問の法律相｜談茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="348" height="67">
	                            </picture>
	                        </a>
	                    </h1>
	                <?php else : ?>
	                    <div class="header__logo">
	                        <a href="<?= home_url(); ?>">
	                            <picture>
	                                <source media=" (max-width:820px)" srcset="<?= get_template_directory_uri(); ?>/assets/image/logo_sp.svg">
	                                <img src="<?= get_template_directory_uri(); ?>/assets/image/logo.svg" alt="茨木市の弁護士  相続・離婚・交通事故・会社顧問の法律相談｜茨木あさひ法律事務所 - Ibawaki Asahi Law Offices" class="header__logo-image" width="348" height="67">
	                            </picture>
	                        </a>
	                    </div>
	                <?php endif; ?>

	                <div class="header__container">
	                    <div class="header__container-inner">
	                        <nav class="header__nav">
	                            <ul class="header__nav-list">
	                                <li class="header__nav-item">
	                                    <a href="<?= home_url(); ?>/" data-subtitle="Top Page" data-current=""><span class="sp-none">ホーム</span><span class="pc-none">トップページ</span></a>
	                                </li>
	                                <li class="header__nav-item">
	                                    <a href="<?= home_url(); ?>/about-us" data-subtitle="Lawyer" data-current="about">弁護士紹介</a>
	                                </li>
	                                <!-- <li class="header__nav-item sp-none">
									<a href="<?= home_url(); ?>/service" data-subtitle="Service" data-current="service"><span>取り扱い業務<span class="pc-none"> 一覧</span></span></a>
								</li> -->
	                                <li class="header__nav-item is-sub-nav">
	                                    <a href="<?= home_url(); ?>/service" data-subtitle="Service" data-current="service"><span>取り扱い業務<span class="pc-none"> 一覧</span></span></a>

	                                    <ul class="header__nav-sub">
	                                        <li class="header__nav-sub-item is-all">
	                                            <a href="<?= home_url(); ?>/service">
	                                                <div class="pc-none">すべてを見る</div>
	                                                <div class="sp-none">取扱業務一覧ページはこちら</div>
	                                            </a>
	                                        </li>


	                                        <?php
                                            // 固定ページ「service」の子ページを全て取得し、$service_child に格納
                                            $service_child = get_pages(array(
                                                'child_of' => get_page_by_path('service')->ID,
                                                'sort_column' => 'menu_order',
                                                'sort_order' => 'asc'
                                            ));

                                            // .header__nav-sub-item の内容を $service_child にそれぞれ置換え
                                            if (!empty($service_child)) {
                                                foreach ($service_child as $page) {
                                                    $page_url = get_permalink($page->ID);
                                                    $page_title = $page->post_title;
                                                    // 全角の括弧（）を <span> で囲む
                                                    $page_title = preg_replace('/（(.*?)）/', '<span>（$1）</span>', $page_title);

                                                    echo '<li class="header__nav-sub-item">';
                                                    echo '<a href="' . esc_url($page_url) . '">' . $page_title . '</a>';
                                                    echo '</li>';
                                                }
                                            }
                                            ?>
	                                    </ul>

	                                </li>
	                                <li class="header__nav-item">
	                                    <a href="<?= home_url(); ?>/price" data-subtitle="Price" data-current="price">料金</a>
	                                </li>
	                                <li class="header__nav-item">
	                                    <a href="<?= home_url(); ?>/office" data-subtitle="Office & Access" data-current="office">事務所概要</a>
	                                </li>
	                                <?php /*<li class="header__nav-item">
								<a href="<?= home_url(); ?>/topics" data-subtitle="Topicks" data-current="topics"><span>新着情報<span class="pc-none"> 一覧</span></span></a>
							</li> */ ?>
	                            </ul>
	                        </nav>

	                        <div class="header__contact">
	                            <a href="tel:072-627-0101" class="header__contact-tel">
	                                <strong><span>TEL :</span>072-627-0101</strong>
	                                <em>受付時間 9:00 - 18:00 (土日祝定休)</em></a>

	                            <a href="<?= home_url(); ?>/contact" class="header__contact-button"><span class="pc-none">メールで</span>お問い合わせ</a>

	                            <address class="header__contact-address pc-none">
	                                <span>〒567-0032</span>
	                                <em>大阪府茨木市西駅前町５番３６号 茨木高橋ビル８階東</em>
	                                <a href="https://maps.app.goo.gl/JGktHu7LFDC4Vqxb9" target="_blank" rel="noopener noreferrer">Googlemapでみる</a>
	                            </address>
	                        </div>
	                    </div>
	                </div>
	            </div>




	            <div class="header__nav-button-area">
	                <button class="header__nav-button pc-none">
	                    <img src="<?= get_template_directory_uri(); ?>/assets/image/button_header-nav.svg" alt="メニューを開く" width="115" height="115">
	                </button>
	                <button class="header__nav-button-close header__nav-button pc-none">
	                    <img src="<?= get_template_directory_uri(); ?>/assets/image/button_header-nav_close.svg" alt="メニューを閉じる" width="115" height="115">
	                </button>
	            </div>
	        </div>
	    </div>