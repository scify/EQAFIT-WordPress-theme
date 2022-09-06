<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eqafit
 */

get_header();
?>

<div class="content u-margin-top-huge">
    <div id="content" role="main">

        <?php

        ?>


        <div class="category_main">

            <div class="category_holder">

                <?php while (have_posts()) : the_post();

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


                        $content = get_the_content();


                        if (!empty($content)) : ?>

                            <div class="category_text_content">
                                <?php echo $content; ?>
                            </div>

                        <?php endif; ?>

                        <?php if (has_post_thumbnail()) { ?>

                            <div class="category_image mb-5">

                                <?php

                                $post_url = get_the_post_thumbnail_url(get_the_ID(), 'blog_size');

                                ?>

                                
                                    <img src="<?php echo $post_url; ?>" />
                                

                            </div>

                        <?php  } ?>

                        <div class="social_share mt-5">

                            <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>

                        </div>




                    </div>

                <?php

                endwhile;

                wp_reset_query();



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
