<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Delicious
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses delicious_header_style()
 */
function delicious_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'delicious_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'delicious_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'delicious_custom_header_setup' );

if ( ! function_exists( 'delicious_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see delicious_custom_header_setup().
 */

function delicious_logo_style(){
	//logo desktop
    $default_logo = get_template_directory_uri() .'/assets/images/logo.png';
    $custom_logo_id = get_theme_mod( 'custom_logo', $default_logo );
    $image_full = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    //logo mobile
    $default_logo_small = get_template_directory_uri() .'/assets/images/logo_small.png';
    $custom_logo_small_id = get_theme_mod( 'custom_logo', $default_logo );
    $image_small = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    ?>
    <style type="text/css">

    	.site-branding{
          	background-image: url('<?php if (!empty($image_full[0])) { echo $image_full[0] ; } else{ echo $default_logo; } ?>');
        }
    	@media (max-width: 600px){
          .site-branding{
          	background-image: url('<?php if (!empty($image_small[0])) { echo $image_small[0] ; } else{ echo $default_logo_small; } ?>');
          }
    	}

    </style>
    <?php
}

function delicious_header_style() {

	$header_text_color = get_header_textcolor();
	

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
	 */
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
