<?php
function get_field($key, $page_id = 0) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
	echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'cmb2_fields_geral');
function cmb2_fields_geral(){
    $cmb = new_cmb2_box([
        'id' => 'geral_box',
        'title' => 'Fields para todas as paginas',
        'object_types' => ['page'],
    ]);
    $cmb->add_field([
        'name'=>'Titulo introdução',
        'id'=>'titulo-introducao-head',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Descrição introdução',
        'id'=>'descrição-introducao-head',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Imagem de backgroud',
        'id'=>'img-background',
        'type'=>'file',
        'options'=>[
            'url'=> false,
        ],
    ]);
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
        'type'=>'textarea',
    ]);
    $cmb->add_field([
        'name'=>'Citação introdução',
        'id'=>'citacao-introducao',
        'type'=>'text',
    ]);
    $produtos = $cmb->add_field([
        'name'=>'Produtos',
        'id'=>'produtos-home',
        'type'=>'group',
        'repeatable'=> true,
        'description'=>'Maximo de 3 itens',
        'options'=>[
            'group_title' => 'item - {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'sottable' => true,
        ],
    ]);
    $cmb->add_group_field($produtos, [
        'name'=>'Icone',
        'id'=>'icone',
        'type'=>'file',
        'options'=>[
            'url'=>false,
        ],
    ]);
    $cmb->add_group_field($produtos, [
        'name'=>'Titulo do produto',
        'id'=>'titulo-produto',
        'type'=>'text',
    ]);
    $cmb->add_group_field($produtos, [
        'name'=>'Descrição do produto',
        'id'=>'descricao-produto',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Chamada para os produtos',
        'id'=>'chamada-produtos',
        'type'=>'text',
    ]);
    $cmb->add_field([
        'name'=>'Chamada para o portfolio',
        'id'=>'chamada-portfolio',
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
    $cmb->add_field([
        'name' => 'Titilo qualidade',
        'id' => 'titulo-qualidade',
        'type'=> 'text',
    ]);
    $cmb->add_field([
        'name' => 'Imagem qualidade',
        'id' => 'img-qualidade',
        'type'=> 'file',
        'options'=>[
            'url'=> false,
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
        'type' => 'textarea',
    ]);
    $cmb->add_field([
        'name' => 'Chamda sobre',
        'id' => 'chamda-sobre',
        'type'=> 'text',
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_portfolio');
function cmb2_fields_portfolio(){
    $cmb = new_cmb2_box([
        'id' => 'portfolio_box',
        'title' => 'Pagina - Portfolio',
        'object_types' => ['page'],
        'show_on' => [
			'key' => 'page-template',
			'value' => 'page-portfolio.php',
		],
    ]);
    $slide = $cmb->add_field([
        'name'=>'Slide',
        'id'=>'slide',
        'type'=>'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'grupo - {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'sottable' => true,
        ],
    ]);
    $cmb->add_group_field($slide,[
        'name' => 'foto - 1',
        'id' => 'grupo-fotos-slide-1',
        'type' => 'file',
        'options'=>[
            'url'=> false,
        ],
    ]);
    $cmb->add_group_field($slide,[
        'name' => 'foto - 2',
        'id' => 'grupo-fotos-slide-2',
        'type' => 'file',
        'options'=>[
            'url'=> false,
        ],
    ]);
    $cmb->add_group_field($slide,[
        'name' => 'foto - 3',
        'id' => 'grupo-fotos-slide-3',
        'type' => 'file',
        'description'=> 'Aqui vai uma foto larga',
        'options'=>[
            'url'=> false,
        ],
    ]);
}

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

?>