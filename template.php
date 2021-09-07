<!-- wordpress関数まとめ -->
<!-- 画像へのパス -->
<?php echo esc_url(get_theme_file_uri('images/')); ?>

<!-- 固定ページへのリンク -->
<?php echo esc_url(home_url('/')); ?>

<!-- テンプレートパーツファイルの読み込み -->
<?php get_template_part('module/part-name'); ?>

<!-- 投稿のサブループ -->
<?php
global $post;
$args = [
  'posts_per_page' => 20,
];
$myposts = get_posts($args);
foreach ($myposts as $post):
setup_postdata($post);

if (has_post_thumbnail()): //投稿にサムネイルが設定されている時
?>
<li class="classname">
    <?php the_post_thumbnail(); ?>
</li>
<?php
else: //投稿にサムネイルが設定されていない時
endif;
?>
<?php
endforeach;
wp_reset_postdata();
?>

<?php
/*
template name:
*/
get_header();
?>
