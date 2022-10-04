<?php
function get_field($key, $page_id = 0) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
	echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home(){
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Pagina - Home',
        'object_types' => ['page'],
        'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
    ]);
    $cmb->add_field([
        'name'=>'Titulo introdução',
        'id'=>'titulo-introducao',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Quote introdução',
        'id'=>'quote-introducao',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Citação introdução',
        'id'=>'citacao-introducao',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Chamada para os produtos',
        'id'=>'chamada-produtos',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Chamada para o portifolio',
        'id'=>'chamada-portifolio',
        'type'=>'text',
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre(){
    $cmb = new_cmb2_box([
        'id' => 'sobre_box',
        'title' => 'Pagina - Sobre',
        'object_types' => ['page'],
        'show_on' => [
			'key' => 'page-template',
			'value' => 'page-sobre.php',
		],
    ]);
    $qualidades = $cmb->add_field([
        'name'=>'Qualidades',
        'id'=>'qualidade',
        'type'=>'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Item - {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'sottable' => true,
        ],
    ]);
    $cmb->add_group_field($qualidades,[
        'name' => 'Titulo item qualidade',
        'id' => 'titilo-item-qualidade',
        'type' => 'text',
    ]);
    $cmb->add_group_field($qualidades,[
        'name' => 'Descrição item qualidade',
        'id' => 'descricao-item-qualidade',
        'type' => 'text',
    ]);
}

// // Funções para Limpar o Header
// remove_action('wp_head', 'rsd_link');
// remove_action('wp_head', 'wlwmanifest_link');
// remove_action('wp_head', 'start_post_rel_link', 10, 0 );
// remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// remove_action('wp_head', 'feed_links_extra', 3);
// remove_action('wp_head', 'wp_generator');
// remove_action('wp_head', 'print_emoji_detection_script', 7);
// remove_action('admin_print_scripts', 'print_emoji_detection_script');
// remove_action('wp_print_styles', 'print_emoji_styles');
// remove_action('admin_print_styles', 'print_emoji_styles');

// // Habilitar Menus
// add_theme_support('menus');
?>