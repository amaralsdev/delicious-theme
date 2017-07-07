<?php
/**
 * Delicious Theme Customizer
 *
 * @package Delicious
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function delicious_customize_register( $wp_customize ) {
    //define texto para utilizar tradução
    $text_domain = 'delicious';


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'delicious_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'delicious_customize_partial_blogdescription',
		) );
	}


    /*campos para gerenciamento*/
	$wp_customize->add_panel( 'painel_geral', array(
    'title' => esc_html__('Configurações do tema', $text_domain),
    'description' => 'configurações referentes ao template desenvolvido',
    'priority' => 10,
    ) );

        /*************** DESTAQUE **************/
    $wp_customize->add_section( 'secao_header', array(
    'title' => esc_html__('Destaque', $text_domain),
    'priority' => 1,
    'panel' => 'painel_geral',
    ) );

   

   /*Imagem destaque*/
    $wp_customize->add_setting('imagem_destaque',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagem_destaque',array(
        'label'   => esc_html__('Imagem de destaque',$text_domain),
        'section' => 'secao_header',
        'settings' => 'imagem_destaque',
        )
    ));


    $wp_customize->add_setting('titulo_destaque',array(
        'default'     => 'Bem vindo ao nosso restaaurante',
        )
    );

    $wp_customize->add_control('titulo_destaque',array(
        'label'       => 'Título <h1>',
        'description' => 'Digite um título para ficar em destaque',
        'section'     => 'secao_header',
        'settings'    => 'titulo_destaque',
        )
    );

    $wp_customize->add_setting('subtitulo_destaque', array(
        'default'     => '- Confira nosso cardápio -',
        )
    );

    $wp_customize->add_control('subtitulo_destaque', array(
        'label'      => 'Subtítulo <h2>',
        'description'=> 'Subtítulo em destaque',
        'section'    => 'secao_header',
        'settings'   => 'subtitulo_destaque',
        )
    );

    $wp_customize->add_setting('texto_destaque',array(
        'default'    => 'TODOS OS NOSSOS PRATOS SÃO FEITOS COM MUITO AMOR E DEDICAÇÃO...',
        )
    );

    $wp_customize->add_control('texto_destaque',array(
        'label'      => 'Texto',
        'description'=> 'Texto normal',
        'section'    => 'secao_header',
        'settings'   => 'texto_destaque',
        'type'       => 'textarea',
        )
    );


    /*************** SOBRE **************/
    $wp_customize->add_section( 'secao_sobre', array(
    'title' => esc_html__('Sobre', $text_domain),
    'priority' => 1,
    'panel' => 'painel_geral',
    ) );

   

   /*Título*/
   $wp_customize->add_setting('nome_sobre', array(
    'default'     => '',
    'priority'    => 2,
    )
   );
   $wp_customize->add_control('nome_sobre', array(
    'label'       =>  esc_html__('Nome da seção', $text_domain),
    'section'     => 'secao_sobre',
    'settings'    => 'nome_sobre',
    'type'        => 'text'
    ));


   /*Legenda*/
   $wp_customize->add_setting('legenda_sobre', array(
    'default'     => '',
    )
   );
   $wp_customize->add_control('legenda_sobre', array(
    'label'       =>  esc_html__('Descrição da seção', $text_domain),
    'description' => __('Fale um pouco sobre o conteúdo', $text_domain),
    'section'     => 'secao_sobre',
    'settings'    => 'legenda_sobre',
    'type'        => 'textarea'
    ));

   /*Título*/
   $wp_customize->add_setting('titulo_sobre', array(
    'default'     => '',
    )
   );
   $wp_customize->add_control('titulo_sobre', array(
    'label'       =>  esc_html__('Título', $text_domain),
    'description' => __('Defina um título', $text_domain),
    'section'     => 'secao_sobre',
    'settings'    => 'titulo_sobre',
    'type'        => 'text'
    ));

   /*Imagem destaque*/
    $wp_customize->add_setting('imagem_sobre',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagem_sobre',array(
        'label'   => esc_html__('Imagem',$text_domain),
        'section' => 'secao_sobre',
        'settings' => 'imagem_sobre',
        )
    ));


     /*Título*/
   $wp_customize->add_setting('texto_sobre', array(
    'default'     => '',
    )
   );
   $wp_customize->add_control('texto_sobre', array(
    'label'       =>  esc_html__('Conteúdo da seção', $text_domain),
    'description' => __('Conteúdo', $text_domain),
    'section'     => 'secao_sobre',
    'settings'    => 'texto_sobre',
    'type'        => 'textarea',
    
    ));




    /*************** FAIXAS **************/
    $wp_customize->add_section( 'secao_extras', array(
    'title' => esc_html__('Faixas', $text_domain),
    'priority' => 1,
    'panel' => 'painel_geral',
    ) );

   

   /*BG Secao extra 1*/
    $wp_customize->add_setting('bg_retangulo_top',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bg_retangulo_top',array(
        'label'   => esc_html__('Imagem de fundo da seção 1',$text_domain),
        'section' => 'secao_extras',
        'settings' => 'bg_retangulo_top',
        )
    ));

    /*Texto secao extra 1 */
    $wp_customize->add_setting('text_retangulo_top',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control('text_retangulo_top',array(
        'label'   => esc_html__('Texto da seção 1',$text_domain),
        'section' => 'secao_extras',
        'settings' => 'text_retangulo_top',
        )
    );



    /*BG Secao extra 2*/
    $wp_customize->add_setting('bg_retangulo_bottom',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bg_retangulo_bottom',array(
        'label'   => esc_html__('Imagem de fundo da seção 2',$text_domain),
        'section' => 'secao_extras',
        'settings' => 'bg_retangulo_bottom',
        )
    ));

    /*Texto secao extra 2 */
    $wp_customize->add_setting('text_retangulo_bottom',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control('text_retangulo_bottom',array(
        'label'   => esc_html__('Texto da seção 2',$text_domain),
        'section' => 'secao_extras',
        'settings' => 'text_retangulo_bottom',
        )
    );


    /*************** CARDAPIO **************/
    $wp_customize->add_section( 'secao_cardapio', array(
    'title' => esc_html__('Cardápio', $text_domain),
    'panel' => 'painel_geral',
    ) );

   

    /*Texto secao cardapio*/
    $wp_customize->add_setting('nome_cardapio',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control('nome_cardapio',array(
        'label'   => esc_html__('Título seção ccardápio',$text_domain),
        'section' => 'secao_cardapio',
        'settings' => 'nome_cardapio',
        )
    );

     /*Texto secao cardapio*/
    $wp_customize->add_setting('descricao_cardapio',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control('descricao_cardapio',array(
        'label'   => esc_html__('Descrição',$text_domain),
        'description' => esc_html__('Fale um pouco sobre a seção' , $text_domain),
        'section' => 'secao_cardapio',
        'settings' => 'nome_cardapio',
        'type'     => 'textarea'
        )
    );




    /*SLIDER GALERIA*/
     $wp_customize->add_section( 'secao_galeria', array(
    'title' => esc_html__('Galeria', $text_domain),
    'panel' => 'painel_geral',
    ) );

    /*Slide 1*/
    $wp_customize->add_setting('imagem_galeria1',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagem_galeria1',array(
        'label'   => esc_html__('Slide 1',$text_domain),
        'section' => 'secao_galeria',
        'settings' => 'imagem_galeria1',
        )
    ));

    /*Slide 2*/
    $wp_customize->add_setting('imagem_galeria2',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagem_galeria2',array(
        'label'   => esc_html__('Slide 2',$text_domain),
        'section' => 'secao_galeria',
        'settings' => 'imagem_galeria2',
        )
    ));


    /*Slide 3*/
    $wp_customize->add_setting('imagem_galeria3',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagem_galeria3',array(
        'label'   => esc_html__('Slide 3',$text_domain),
        'section' => 'secao_galeria',
        'settings' => 'imagem_galeria3',
        )
    ));


    /*Slide 4*/
    $wp_customize->add_setting('imagem_galeria4',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagem_galeria4',array(
        'label'   => esc_html__('Slide 4',$text_domain),
        'section' => 'secao_galeria',
        'settings' => 'imagem_galeria4',
        )
    ));

    /*Slide 5*/
    $wp_customize->add_setting('imagem_galeria5',array(
        'default'    => '',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagem_galeria5',array(
        'label'   => esc_html__('Slide 5',$text_domain),
        'section' => 'secao_galeria',
        'settings' => 'imagem_galeria5',
        )
    ));


    /************* CONTATOS ******************/
     $wp_customize->add_section( 'secao_contatos', array(
    'title' => esc_html__('Contatos', $text_domain),
    'panel' => 'painel_geral',
    ) );

    /*Titulo*/
    $wp_customize->add_setting('titulo_contatos',array(
        'default'    => 'Fale conosco',
        )
    );
    $wp_customize->add_control('titulo_contatos',array(
        'label'   => esc_html__('Título da seção',$text_domain),
        'section' => 'secao_contatos',
        'settings' => 'titulo_contatos',
        )
    );


    
    /*descricao*/
    $wp_customize->add_setting('desc_contatos',array(
        'default'    => 'Nulla facilisi. Donec at ligula finibus dolor scelerisque porttitor. In hac habitasse platea dictumst. Praesent posuere, sem gravida maximus bibendum, sapien erat venenatis massa, et finibus nibh eros eget quam. Aenean pellentesque ornare enim quis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In a semper mi, vitae condimentum ligula. Nam vehicula tellus vitae sollicitudin iaculis.',
        )
    );
    $wp_customize->add_control('desc_contatos',array(
        'label'   => esc_html__('Descrição da seção',$text_domain),
        'description' => esc_html__('Fale um pouco sobre os contatos', $text_domain),
        'section' => 'secao_contatos',
        'settings' => 'desc_contatos',
        'type'     => 'textarea',
        )
    );

    /*sobre*/
    $wp_customize->add_setting('sobre_contatos',array(
        'default'    => 'Cras luctus consectetur justo eget lobortis. Ut eget justo libero. Phasellus euismod nibh at nisi mollis luctus. Suspendisse consequat malesuada lacus non auctor. Sed pharetra volutpat augue, sed suscipit massa tempus non. Cras hendrerit ipsum vel nisl ultrices.',
        )
    );
    $wp_customize->add_control('sobre_contatos',array(
        'label'   => esc_html__('Texto lateral',$text_domain),
        'description' => esc_html__('Fale um pouco sobre os contatos', $text_domain),
        'section' => 'secao_contatos',
        'settings' => 'sobre_contatos',
        'type'     => 'textarea',
        )
    );

    /*Telefone*/
    $wp_customize->add_setting('fone_contatos',array(
        'default'    => '(00) 1234-5678',
        )
    );
    $wp_customize->add_control('fone_contatos',array(
        'label'   => esc_html__('Telefone',$text_domain),
        'section' => 'secao_contatos',
        'settings' => 'fone_contatos',
        )
    );

    /*Horário*/
    $wp_customize->add_setting('hr_contatos',array(
        'default'    => 'SEG. - SÁB. 11h às 15h',
        )
    );
    $wp_customize->add_control('hr_contatos',array(
        'label'   => esc_html__('Horário de funcionamento',$text_domain),
        'section' => 'secao_contatos',
        'settings' => 'hr_contatos',
        )
    );


    /*Email*/
    $wp_customize->add_setting('email_contatos',array(
        'default'    => 'setor@seudominio.com.br',
        )
    );
    $wp_customize->add_control('email_contatos',array(
        'label'   => esc_html__('E-mail',$text_domain),
        'section' => 'secao_contatos',
        'settings' => 'email_contatos',
        )
    );

    /*Site*/
    $wp_customize->add_setting('site_contatos',array(
        'default'    => get_bloginfo('url'),
        )
    );
    $wp_customize->add_control('site_contatos',array(
        'label'   => esc_html__('Site',$text_domain),
        'section' => 'secao_contatos',
        'settings' => 'site_contatos',
        )
    );

    /*Site*/
    $wp_customize->add_setting('endereco_contatos',array(
        'default'    => 'Endereço',
        )
    );
    $wp_customize->add_control('endereco_contatos',array(
        'label'   => esc_html__('Endereço',$text_domain),
        'section' => 'secao_contatos',
        'settings' => 'endereco_contatos',
        )
    );
   

}
add_action( 'customize_register', 'delicious_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function delicious_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function delicious_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function delicious_customize_preview_js() {
	wp_enqueue_script( 'delicious_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'delicious_customize_preview_js' );

