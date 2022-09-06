<?php

/**
 * Enqueue scripts and styles.
 */

function eqafit_scripts()
{
	wp_enqueue_style('eqafit-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('eqafit-style', 'rtl', 'replace');

	wp_enqueue_script('eqafit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	wp_enqueue_script('eqafit-bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), "5.1.1", true);
	wp_enqueue_style('eqafit-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css", array(), "5.15.4");
	wp_enqueue_script('eqafit-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0", true);
	wp_enqueue_script('eqafit-common', get_template_directory_uri() . '/js/common.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	if (is_front_page()) {
		wp_enqueue_style('front-page', get_template_directory_uri() . "/css/front.css", array(), _S_VERSION);
	} else if (is_page_template('page-outcomes.php')) {
		wp_enqueue_style('outcomes', get_template_directory_uri() . "/css/outcomes.css", array(), _S_VERSION);
	} else if (is_page_template('page-our-team.php')) {
		wp_enqueue_style('our-team', get_template_directory_uri() . "/css/page-our-team.css", array(), _S_VERSION);
	} else if (is_page_template('page-quiz.php')) {
		wp_enqueue_style('quiz', get_template_directory_uri() . "/css/page-quiz.css", array(), _S_VERSION);
	} else if (is_category() || is_single() || is_search()) {
		wp_enqueue_style('news', get_template_directory_uri() . "/css/news.css", array(), _S_VERSION);
	}
}

add_action('wp_enqueue_scripts', 'eqafit_scripts');



function eqafit_features()
{
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'eqafit_features');
