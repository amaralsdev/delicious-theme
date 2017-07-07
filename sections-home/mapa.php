<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delicious
 */

get_header(); ?>

	
         <section id="about">
        
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.287972743933!2d-63.8934330856684!3d-8.758952993708466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92325cc431a17f4d%3A0xd0755c0fc9125b71!2sNETPIX+-+Ag%C3%AAncia+Web!5e0!3m2!1spt-BR!2sbr!4v1499176075043" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
<div id="map"></div>

          
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO84yopFKnmo0zkyxMKYLBYEcUafrmpzU"></script>
         </section>

		
<?php

//get_footer();
