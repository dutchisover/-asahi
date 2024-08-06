<!-- ローディング -->
<style>
	/* Loading背景画面設定　*/

	#splash {
		/*fixedで全面に固定*/
		position: fixed;
		z-index: 999;
		width: 100%;
		height: 100%;
		background: #333;
		color: #fff;
		text-align: center;
	}

	/* Loadingバー中央配置　*/
	#splash_text {
		position: absolute;
		top: 50%;
		left: 50%;
		z-index: 999;
		width: 100%;
		color: #fff;
		transform: translate(-50%, -50%);
	}

	/*IE11対策用バーの線の高さ※対応しなければ削除してください*/
	#splash_text svg {
		height: 2px;
	}
</style>
