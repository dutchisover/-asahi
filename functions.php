<?php


// SSLリダイレクト
// if (empty($_SERVER['HTTPS'])) {
// 	header("HTTP/1.1 301 Moved Permanently");
// 	header("Location: https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
// 	exit;
// }



////////////////// JS・CSSファイルを読み込む //////////////////
function add_files()
{
	//キャッシュ無効（開発時はこちらをコメント解除）
	// $cache = date('YmdHis');
	//キャッシュ有効（公開後はこちらをコメント解除）
	$cache = 1.0;

	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', "", $cache, false);

	// Swiper読み込み（CSS、JS）
	wp_enqueue_style('swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', "", $cache);
	wp_enqueue_script('swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), $cache, true);


	// スクロール固定読み込み
	// wp_enqueue_script('bodyScrollLock', get_template_directory_uri() . '/js/bodyScrollLock.min.js', array(), $cache, true);


	// GSAP
	// wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '3.10.4', true);
	// wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array('gsap'), '3.10.4', true);


	// MicroModal
	// wp_enqueue_script('micromodal', 'https://cdn.jsdelivr.net/npm/micromodal@0.4.10/dist/micromodal.min.js', array(), '0.4.10', true);


	// サイト共通（CSS、JS）
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', "", $cache);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array(), $cache, true);
}
add_action('wp_enqueue_scripts', 'add_files');






////////////////// 【表示カスタマイズ】 //////////////////

// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

// 段落で行間追加
add_theme_support('custom-line-height');

// 画像カバーで単位追加
add_theme_support('custom-units', 'px', 'em', 'rem', 'vh', 'vw');




////////////////// カスタム投稿タイプのURLを「日付-記事ID」に変更 //////////////////
// function customize_news_permalink($post_link, $post)
// {
// 	if ($post->post_type == 'news') {
// 		$post_date = get_the_date('Ymd', $post->ID);
// 		return home_url('news/' . $post_date . '-' . $post->ID . '/');
// 	} else {
// 		return $post_link;
// 	}
// }
// add_filter('post_type_link', 'customize_news_permalink', 1, 2);

// function news_rewrite_rules()
// {
// 	add_rewrite_rule(
// 		'news/([0-9]{8})-([0-9]+)/?$',
// 		'index.php?post_type=news&p=$matches[2]',
// 		'top'
// 	);
// }
// add_action('init', 'news_rewrite_rules');






////////////////// ページネーション関数 //////////////////
function custom_pagination($max_num_pages, $range = 2, $paged)
{
	$big = 3; // need an unlikely integer
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, $paged),
		'total' => $max_num_pages,
		'prev_text' => __('←'),
		'next_text' => __('→'),
		'type' => 'list',
		'end_size' => 3,
		'mid_size' => $range
	));
}






////////////////// ACFプロ用 オプションページ //////////////////
// acf_add_options_page(
// 	array(
// 		'section_title' => '404音源', // ページで表示されるタイトル
// 		'menu_title' => '404音源', // メニューで表示されるタイトル
// 		'menu_slug'  => 'music404', // 管理画面のメニュースラッグ
// 		'capability' => 'edit_posts', // このメニューが表示されるユーザーの権限
// 		'redirect'   => true, // メニュークリック時、sub_pageにリダイレクトするか（デフォルトはtrue）
// 		'position' => 5,
// 		'icon_url' => 'dashicons-welcome-write-blog'
// 	)
// );





////////////////// ACFプロ用 カスタムブロック //////////////////
// function register_custom_image_block()
// {
// 	acf_register_block_type(array(
// 		'name'              => 'custom-image-block',
// 		'title'             => __('Custom Image Block'),
// 		'description'       => __('PCとスマホの画像を切り替えるブロックです。'),
// 		'render_callback'   => 'render_custom_image_block',
// 		'category'          => 'formatting',
// 		'icon'              => 'format-image',
// 		'keywords'          => array('image', 'responsive', 'custom'),
// 		'supports'          => array(
// 			'align' => false
// 		),
// 	));
// }

// レンダリングコールバック関数を読み込み
// require get_template_directory() . '/template-parts/blocks/image-switcher.php';

// add_action('acf/init', 'register_custom_image_block');






////////////////// SVGファイルをアップロード可能にする //////////////////
function add_svg_to_upload_mimes($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');

function fix_svg()
{
	echo '<style>
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'fix_svg');

function check_for_svg($file)
{
	$filetype = wp_check_filetype($file['name']);
	if ($filetype['ext'] === 'svg') {
		$file['type'] = 'image/svg+xml';
	}
	return $file;
}
add_filter('wp_check_filetype_and_ext', 'check_for_svg', 10, 4);



////////////////// 親ページのスラッグが「service」の場合は「page-service-child.php」をインクルードする //////////////////

add_filter('template_include', 'include_service_child_template');

function include_service_child_template($template)
{
	if (is_page() && $post = get_post()) {
		$parent_id = wp_get_post_parent_id($post->ID);
		if ($parent_id) {
			$parent_post = get_post($parent_id);
			if ($parent_post && $parent_post->post_name === 'service') {
				$child_template = locate_template('page-service-child.php');
				if ($child_template) {
					return $child_template;
				}
			}
		}
	}
	return $template;
}






// 投稿画面にCSSを当てる
// function add_admin_style()
// {
// 	$path_css = get_template_directory_uri() . '/css/editor.css';
// 	wp_enqueue_style('admin_style', $path_css);
// $path_js = get_template_directory_uri() . '/assets/js/admin.js';
// wp_enqueue_script('admin_script', $path_css);
// }
// add_action('admin_enqueue_scripts', 'add_admin_style');





////////////////// メールの確認inputチェック //////////////////
// function custom_email_validation_filter($result, $tag)
// {
// 	$tag = new WPCF7_FormTag($tag);
// 	if ($tag->name === 'email-check') {
// 		$your_email = isset($_POST['email-input']) ? trim($_POST['email-input']) : '';
// 		$your_email_confirm = isset($_POST['email-check']) ? trim($_POST['email-check']) : '';
// 		if ($your_email !== $your_email_confirm) {
// 			$result->invalidate($tag, "メールアドレスが違います");
// 		}
// 	}
// 	return $result;
// }
// add_filter('wpcf7_validate_email*', 'custom_email_validation_filter', 20, 2);
// add_filter('wpcf7_validate_email', 'custom_email_validation_filter', 20, 2);


////////////////// TOPICS カテゴリー該当なしの非表示 //////////////////
add_filter("radio_buttons_for_taxonomies_no_term_topics_taxonomy", "__return_FALSE");
