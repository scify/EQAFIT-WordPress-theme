<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package eqafit
 */

get_header();
?>

<div class="content u-margin-top-huge">
    <div id="content" role="main">

        <header class="page-header">
            <h1 class="page-title">
                <?php
                /* translators: %s: search query. */
                printf(esc_html__('Search Results for: %s', 'Hybrida'), '<span>' . get_search_query() . '</span>');
                ?>
            </h1>
        </header><!-- .page-header -->
        <div class="category_main">

            <div class="category_holder">

                <?php if (have_posts()) : ?>

                    <?php
                    /* Start the Loop */
                    while (have_posts()) :
                        the_post();
                    ?>

                        <div class="category_content">

                            <div class="category_date_inner">

                                <div class="category_date"><?php echo get_post_time('F j, Y', true, get_the_ID()); ?></div>


                            </div>

                            <div class="category_title">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <?php echo get_the_title(); ?>
                                </a>
                            </div>

                            <?php

                            $content = get_the_excerpt();

                            if (empty($content)) :
                                $content = get_the_content();
                            endif;

                            $number_words = str_word_count($content);

                            if ($number_words > 60) :

                                $words = explode(' ', $content);

                                $result = '';

                                for ($i = 0; $i < 15 && isset($words[$i]); $i++) {
                                    $result .= $words[$i] . ' ';
                                }

                                $content = rtrim($result) . '...';

                            endif;

                            if (!empty($content)) : ?>

                                <div class="category_text_content">
                                    <?php echo $content; ?>
                                </div>

                            <?php endif; ?>

                            <?php if (has_post_thumbnail()) { ?>

                                <div class="category_image">

                                    <?php

                                    $post_url = get_the_post_thumbnail_url(get_the_ID(), 'blog_size');

                                    ?>

                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <img src="<?php echo $post_url; ?>" />
                                    </a>

                                </div>

                            <?php  } ?>

                            <div class="social_share mt-5">

                                <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>

                            </div>




                        </div>

                <?php

                    endwhile;

                    wp_reset_query();

                /*
                    global $wp_query;
                    $big = 999999999;
                    echo '<div class="paginate_cat_holder">'.paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $blog_posts->max_num_pages,
                        'prev_next'          => true,
                        'prev_text'          => __('<'),
                        'next_text'          => __('>'),
                    ) ).'</div>';
                   */


                else :

                    get_template_part('template-parts/content', 'none');

                endif;




                ?>

            </div>

            <?php if (function_exists('register_sidebar')) {
                get_sidebar();
            } ?>



        </div>
    </div><!-- #content -->

</div>

<?php
get_sidebar();
get_footer();
