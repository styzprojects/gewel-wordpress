<?php
/**
 * The template for displaying the footer.
 *
 * @package Sela
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>

		<ul class="footer-list">
			<li class="footer-list-item">
				<p class="footer-list-item-title">GEWELについて</p>
				<ul class="footer-inner-list">
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/about/greetings/">代表理事挨拶</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/about/board-members/">理事紹介</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/about/advisor-introduction/">アドバイザー紹介</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/about/organization-overview/">団体概要・設立経緯・沿革</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/about/contact/">お問い合わせ</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/about/related-organizations/">関係組織</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/about/privacy-policy/">個人情報保護方針</a>
					</li>
				</ul>
			</li>
			<li class="footer-list-item">
				<p class="footer-list-item-title">ビジョン</p>
				<ul class="footer-inner-list">
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/vision/detail/">ビジョン・ミッション</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/d-i/">ダイバーシティ＆インクルージョンについて</a>
					</li>
				</ul>
			</li>
			<li class="footer-list-item">
				<p class="footer-list-item-title">事業内容</p>
				<ul class="footer-inner-list">
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/business/enlight-and-educate/">啓発育成</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/business/research/">調査研究</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/business/experience/">体験共有</a>
					</li>
				</ul>
			</li>
			<li class="footer-list-item">
				<p class="footer-list-item-title">参加しよう</p>
				<ul class="footer-inner-list">
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/participation/donation/">法人会員、寄付</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/supporter/">個人会員</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/participation/volunteer/">ボランティア、プロボノ</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/participation/mail-magazine/">メルマガ</a>
					</li>
				</ul>
			</li>
			<li class="footer-list-item">
				<p class="footer-list-item-title">インクルージョンラボ</p>
				<ul class="footer-inner-list">
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/category/inclusion-lab/interview/">D&Iインタビュー</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/category/inclusion-lab/event-reports/">イベントレポート</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/category/inclusion-lab/examples/">啓発事例</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/category/inclusion-lab/research/">調査レポート</a>
					</li>
					<li class="footer-inner-list-item">
						<a class="footer-inner-list-item-link" href="/category/inclusion-lab/experience-examples/">体験事例</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="copyright">
			Copyright © GEWEL All Rights Reserved.
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<style media="screen">
	.footer-list {
		overflow: hidden;
		margin-left: 0;
	}
	.footer-list-item {
		float: left;
		width: 20%;
		padding: 10px;
		box-sizing: border-box;
		list-style: none;
	}
	.footer-list-item-title {
		font-size: 16px;
		font-weight: bold;
		text-align: left;
	}
	.footer-inner-list {
		margin-left: 0;
	}
	.footer-inner-list-item {
		margin-bottom: 10px;
		list-style: none;
	}
	.footer-inner-list-item-link {
		display: block;
		font-size: 13px;
		text-align: left;
		color: white;
	}
	.footer-inner-list-item-link:hover {
		text-decoration: underline;
	}
	@media screen and (max-width: 600px) {
		.site-footer {
			padding: 20px;
		}
		.footer-list-item {
			float: left;
			width: 100%;
			margin-bottom: 20px;
			padding: 0;
			box-sizing: border-box;
			list-style: none;
		}
	}
</style>

<?php wp_footer(); ?>

</body>
</html>
