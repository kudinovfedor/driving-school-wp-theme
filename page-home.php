<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

<?php echo do_shortcode('[bw-last-posts]'); ?>
<?php echo do_shortcode('[bw-reviews]'); ?>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
