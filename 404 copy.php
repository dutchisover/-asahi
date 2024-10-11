<?php get_header(); ?>

<?php
// ページのスラッグを取得
global $post;
$slug = $post->post_name;
?>

<main class="main page__main">
	<h1 class="page__title" data-fade="0">404 Not Found<span>お探しのページが見つかりません。</span></h1>

	<div class="breadcrumb" data-fade="100">
		<div class="breadcrumb__inner">
			<a href="<?php echo home_url(); ?>" class="breadcrumb__link">TOP</a> &gt;
			<span class="breadcrumb__current">404 Not Found<span>お探しのページが見つかりません。</span></span>
		</div>
	</div>
	<!-- /.breadcrumb -->

	<div class="page-404">
		<p class="section_text text page404_text">ページが「移動」もしくは「削除」されたか<br class="pc-none">「一時的にアクセスできない」可能性があります。</p>
		<p class="section_text text page404_text">恐れ入りますが、再度トップページから<br class="pc-none">アクセスをお願いいたします。</p>

		<div class="button_area">
			<div class="button">
				<a href="<?= home_url(); ?>" class="button_link">トップページへ戻る</a>
			</div>
		</div>
	</div>

</main>
<!-- /.main -->

<?php get_footer(); ?>
