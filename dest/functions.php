<?php

/* 管理バーの非表示 (margin-topがなくなる) */
add_filter('show_admin_bar', '__return_false');

/* アイキャッチ画像の有効化 */
add_theme_support('post-thumbnails');

/* アイキャッチ画像 サイズ指定させない */
add_filter('wp_calculate_image_srcset_meta', '__return_null');

/* スタイルの読み込み(呼び出し) */
add_action('init', 'load_script');
/* スタイルの読み込み(定義) */
function load_script()
{
    if (!is_admin()) {
        /* web fonts */
        wp_enqueue_style(
            'web-fonts',
            '',
            [],
            null,
            false
        );

        /* style */
        wp_enqueue_style(
            'style_main',
            get_template_directory_uri().'/style.min.css',
            ['web-fonts'],
            null,
            false
        );

        /* main.js 読み込み */
        wp_enqueue_script(
            'js_main',
            get_template_directory_uri().'/js/bundle.min.js',
            ['jquery'],
            null,
            false
        );
    }
}

add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle)
{
    if ($handle !== 'js_main') {
        return $tag;
    }

    return str_replace(' src=', ' defer src=', $tag);
}

add_action('after_setup_theme', 'custom_theme_setup');
function custom_theme_setup()
{
    /* タイトルを動的に出力 */
    add_theme_support('title-tag');

    /* ブロックエディタ用のcssを有効化 */
    add_theme_support('wp-block-styles');

    /* head内にフィードリンクを出力 */
    add_theme_support('automatic-feed-links');
}

/* モバイル対応 */
function is_mobile()
{
    $useragents = [
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        'iPad',            // iPad
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate',          // Other iPhone browser
    ];
    $pattern = '/'.implode('|', $useragents).'/i';

    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
