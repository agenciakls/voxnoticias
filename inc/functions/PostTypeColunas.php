<?php 
function postTypeColuna () {
    $labels = array(
        'name'               => _x( 'Coluna', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Coluna', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Coluna', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Coluna', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Coluna', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Coluna', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Coluna', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Coluna', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Coluna', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Coluna', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Coluna Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Coluna encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Coluna encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'coluna' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'show_in_rest'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'author'),
        'taxonomies'         => array('coluna')
    );
    register_post_type('coluna', $args);
    add_post_type_support( 'coluna', 'wps_subtitle' );
}
add_action('init', 'postTypeColuna');
