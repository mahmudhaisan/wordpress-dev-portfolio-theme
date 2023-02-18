<?php

/*
Template Name: Home
 */

get_header();?>

<?php get_template_part('template-parts/content', 'banner');?>
<?php get_template_part('template-parts/content', 'about');?>
<?php get_template_part('template-parts/content', 'skills');?>
<?php get_template_part('template-parts/content', 'services');?>
<?php get_template_part('template-parts/content', 'counter');?>
<?php get_template_part('template-parts/content', 'portfolio');?>
<?php get_template_part('template-parts/content', 'testimonials');?>
<?php get_template_part('template-parts/content', 'contact');?>
<?php get_template_part('template-parts/content', 'blog');?>
<?php get_template_part('template-parts/content', 'newsletter');?>

<?php get_footer();?>