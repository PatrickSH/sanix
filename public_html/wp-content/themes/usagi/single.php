<?php get_header(); ?>
<?php echo $html; ?>
<div class="container single-post mx-auto">
    <h1><?php echo $post->post_title; ?></h1>
    <?php echo $post->post_content; ?>
</div>
<?php get_footer(); ?>