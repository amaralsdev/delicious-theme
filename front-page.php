<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delicious
 */

get_header(); ?>


	<div id="primary" class="content-area">
	    <?php get_template_part('sections-home/about','page'); ?>
	    <?php get_template_part('sections-home/before-cardapio','page'); ?>
	    <?php get_template_part('sections-home/cardapio','page'); ?>
	    <?php get_template_part('sections-home/carousel','page'); ?>
	    <?php get_template_part('sections-home/encomendas','page'); ?>
	    <?php get_template_part('sections-home/contato','page'); ?>
	    <?php get_template_part('sections-home/mapa','page'); ?>
	
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
