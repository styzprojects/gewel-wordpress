<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package Sela
 */

if ( ! is_active_sidebar( 'sidebar-5' ) && ! is_active_sidebar( 'sidebar-6' ) && ! is_active_sidebar( 'sidebar-7' ) ) {
	return;
}
?>

<?php
    $query = new WP_Query([
        'category__in' => [8, 9, 12],
        'posts_per_page' => 3,
        'post_type' => 'post',
    ]);
    if ( $query->have_posts() ):
?>
    <div class="front-widget">
        <div class="front-widget-heading">
            <h2>NEWS</h2>
        </div>
        <div class="widget-area front-widget-area" role="complementary">
            <?php while ( $query->have_posts() ): ?>
                <?php $query->the_post() ?>
                <div class="widget-area">
                    <aside class="widget widget_text">
                        <div class="textwidget">
                            <a href="<?php the_permalink(); ?>" class="front-widget-image">
								<span class="front-widget-image-category"><?php echo end(get_the_category())->cat_name ?></span>
                                <span class="front-widget-image-box" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center; background-size: cover;">
                            </a>
                            <h3 class="widget-title">
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							</h3>
                        </div>
                    </aside>
                </div>
            <?php endwhile; ?>
        </div>
		<div class="front-widget-read-more-holder">
			<a href="/category/news/" class="front-widget-read-more">もっとみる</a>
		</div>

    </div>
<?php endif ?>

<?php
$query = new WP_Query([
    'category__in' => [3, 4, 5, 6, 7],
    'posts_per_page' => 6,
    'post_type' => 'post',
]);
if ( $query->have_posts() ):
    ?>
    <div class="front-widget">
        <div class="front-widget-heading">
            <h2>インクルージョンラボ</h2>
        </div>
        <div class="widget-area front-widget-area" role="complementary">
            <?php while ( $query->have_posts() ): ?>
                <?php $query->the_post() ?>
                <div class="widget-area">
                    <aside class="widget widget_text">
                        <div class="textwidget">
                            <a href="<?php the_permalink(); ?>" class="front-widget-image">
								<span class="front-widget-image-category"><?php echo end(get_the_category())->cat_name ?></span>
								<span class="front-widget-image-box" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center; background-size: cover;">
                            </a>
                            <h3 class="widget-title">
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							</h3>
                        </div>
                    </aside>
                </div>
            <?php endwhile; ?>
        </div>
		<div class="front-widget-read-more-holder">
        	<a href="/category/inclusion-lab/" class="front-widget-read-more">もっとみる</a>
		</div>
    </div>
<?php endif ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.9&appId=260255574443453";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

<div class="front-widget-sns">
	<div class="front-widget-sns-box">
		<!-- background: #3b5998; -->
		<p class="front-widget-sns-box-title front-widget-sns-box-title--fb">
			<span style="display: inline-block; vertical-align: bottom;">facebookにいいねして最新情報をチェック</span>
		</p>
		<div class="front-widget-sns-box-inner">
			<div class="fb-page" data-href="https://www.facebook.com/NPOGEWEL/" data-tabs="timeline" data-width="413" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NPOGEWEL/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NPOGEWEL/">NPO法人GEWEL</a></blockquote></div>
		</div>
	</div>
	<div class="front-widget-sns-box">
		<p class="front-widget-sns-box-title front-widget-sns-box-title--tw">
			<span style="display: inline-block; vertical-align: bottom;">twitterをフォロー</span>
		</p>
		<div class="front-widget-sns-box-inner" style="border: 1px solid #e9ebee;">
			<a class="twitter-timeline" data-height="400" href="https://twitter.com/NPO_GEWEL">Tweets by NPO_GEWEL</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>
</div>

<style>
    .front-widget {
        border: 1px solid #f2f2f2;
    }
    .front-widget-area {
		padding-bottom: 20px;
        border: none;
		font-size: 0;
    }
	.front-widget-sns {
		width: 70%;
		margin: 40px auto;
		overflow: hidden;
	}
	.front-widget-sns-box {
		width: 48%;
		float: left;
	}
	.front-widget-sns-box:first-child {
		margin-right: 2%;
	}
	.front-widget-image {
		position: relative;
	}
	.front-widget-image-category {
		position:absolute;
		top: 0;
		left: 0;
		opacity: 0.7;
		font-size: 12px;
		padding: 6px 15px 6px;
		width: 100px;
		background: black;
		z-index: 100;
		text-align: center;
		color: white;
	}
	.front-widget-image-box {
		display: block;
		width: 100%;
		height: 200px;
	}
	.front-widget-sns-box-title {
		padding: 10px;
		color: white;
		text-align: center;
	}
	.front-widget-sns-box-title--fb:before {
		content: "\f204";
		font-family: Genericons;
		margin-right: 10px;
		display: inline-block;
		vertical-align: bottom;
	}
	.front-widget-sns-box-title--tw:before {
		content: "\f202";
		font-family: Genericons;
		margin-right: 10px;
		display: inline-block;
		vertical-align: bottom;
	}
	.front-widget-sns-box-title--fb {
		background: #3b5998;
	}
	.front-widget-sns-box-title--tw {
		background: #68aade;
	}
    .front-widget-read-more-holder {
    	margin-bottom: 40px;
		text-align: center;
	}
    .front-widget-read-more {
		display: inline-block;
		border-radius: 25px;
		padding: 5px 40px;
		text-align: center;
		color: #fff;
		background: #40ab6c;
	}
    .front-widget-heading {
        padding: 3em 4.661% 1em;
    }
    .front-widget-heading > h2 {
        margin: 0;
    }
    .widget-title {
        text-align: left;
    }
    .widget-title:before,
    .widget-title:after {
        content: "";
    }
	@media screen and (max-width: 600px) {
		.front-widget-image-box {
			display: block;
			width: 100%;
			height: 200px;
		}
		.front-widget-sns {
			width: 90%;
			margin: 40px auto;
		}
		.front-widget-sns-box {
			width: 100%;
			float: none;
		}
		.front-widget-sns-box:first-child {
			margin-bottom: 40px;
		}
	}
	.fb_iframe_widget,
	.fb_iframe_widget span,
	.fb_iframe_widget iframe[style]{
	    width: 100% !important;
	}
</style>

<script type="text/javascript">
	$('iframe').load( function() {
	$('iframe').contents().find(".timeline-Widget")
	  .append($("<style type='text/css'>  .timeline-Widget{border-radius: 0; border: 1px solid #e9ebee;}  </style>"));
	});
</script>
