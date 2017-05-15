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
        'category__in' => [8, 9],
        'posts_per_page' => 3,
        'post_type' => 'post',
    ]);
    if ( $query->have_posts() ):
?>
    <div class="front-widget-heading">
        <h2>NEWS</h2>
    </div>
    <div class="widget-area front-widget-area" role="complementary">
        <?php while ( $query->have_posts() ): ?>
            <?php $query->the_post() ?>
            <div class="widget-area">
                <aside class="widget widget_text">
                    <div class="textwidget">
                        <a href="https://selademo.wordpress.com/page-templates/full-width-page/" class="front-widget">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>">
                        </a>
                        <h3 class="widget-title"><?php the_title() ?></h3>
                    </div>
                </aside>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif ?>

<?php
$query = new WP_Query([
    'category__in' => [3, 4, 5, 6, 7],
    'posts_per_page' => 3,
    'post_type' => 'post',
]);
if ( $query->have_posts() ):
    ?>
    <div class="front-widget-heading">
        <h2>インクルージョンラボ</h2>
    </div>
    <div class="widget-area front-widget-area" role="complementary">
        <?php while ( $query->have_posts() ): ?>
            <?php $query->the_post() ?>
            <div class="widget-area">
                <aside class="widget widget_text">
                    <div class="textwidget">
                        <a href="https://selademo.wordpress.com/page-templates/full-width-page/" class="front-widget">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>">
                        </a>
                        <h3 class="widget-title"><?php the_title() ?></h3>
                    </div>
                </aside>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif ?>


<style>
    .front-widget > img {
        width: 100%;
    }
    .front-widget-heading {
        padding: 3em 4.661% 0;
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
</style>

