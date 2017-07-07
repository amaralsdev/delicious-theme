<?php
/* post type*/
/*
* Creating a function to create our CPT
*/
//baseado em: http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/

function custom_post_type() {
	flush_rewrite_rules( false );

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Cardapio', 'Post Type General Name', 'delicious' ),
		'singular_name'       => _x( 'Cardapio', 'Post Type Singular Name', 'delicious' ),
		'menu_name'           => __( 'Cardapio', 'delicious' ),
		'parent_item_colon'   => __( 'Parent Cardapio', 'delicious' ),
		'all_items'           => __( 'Todos os itens', 'delicious' ),
		'view_item'           => __( 'Visualizar Cardapio', 'delicious' ),
		'add_new_item'        => __( 'Adicionar Cardapio', 'delicious' ),
		'add_new'             => __( 'Adicionar novo', 'delicious' ),
		'edit_item'           => __( 'Editar Cardapio', 'delicious' ),
		'update_item'         => __( 'Atualizar Cardapio', 'delicious' ),
		'search_items'        => __( 'Buscar Cardapio', 'delicious' ),
		'not_found'           => __( 'Nada encontrado', 'delicious' ),
		'not_found_in_trash'  => __( 'Nada encontrado na lixeira', 'delicious' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'cardapio', 'delicious' ),
		'description'         => __( 'cardápios', 'delicious' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'cardapio', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );

