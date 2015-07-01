<?php

add_action('wp_head', 'wprtb_add_gera_css_init');


function wprtb_add_gera_css_init()
{

$sessao = 'esquemacores';

# Fundo do site
$opcao = get_option('wprtb_'.$sessao.'_fundoSite');

if(!empty($opcao))
{
	$opcao = 'body{background-color:'.get_option('wprtb_'.$sessao.'_fundoSite').'}';

	echo '<style>'.$opcao.'</style>';
}

# Fundo do Cabeçalho
$opcao = get_option('wprtb_'.$sessao.'_fundoCabecalhoSite');

if(!empty($opcao))
{
	$opcao = 'header{background-color:'.get_option('wprtb_'.$sessao.'_fundoCabecalhoSite').'}';

	echo '<style>'.$opcao.'</style>';
}

# Título do Site

$opcao = get_option('wprtb_'.$sessao.'_tituloSite');

if(!empty($opcao))
{
	$opcao = '#header-content h1 {color:'.get_option('wprtb_'.$sessao.'_tituloSite').' !important;}';

	echo '<style>'.$opcao.'</style>';
}

# Descrição do Site
$opcao = get_option('wprtb_'.$sessao.'_descricaoSite');

if(!empty($opcao))
{
	$opcao = '#header-content h4 {color:'.get_option('wprtb_'.$sessao.'_descricaoSite').' !important;}';
	echo '<style>'.$opcao.'</style>';
}


# Menu do Site
$opcao = get_option('wprtb_'.$sessao.'_fundoMenuSite');

if(!empty($opcao))
{
	$opcao = 'nav#top-menu {background-color:'.get_option('wprtb_'.$sessao.'_fundoMenuSite').' !important;}';
	echo '<style>'.$opcao.'</style>';
}


$opcao = get_option('wprtb_'.$sessao.'_textoMenuSite');

if(!empty($opcao))
{
	$opcao = '.menu li a  {color:'.get_option('wprtb_'.$sessao.'_textoMenuSite').' !important;}';

	echo '<style>'.$opcao.'</style>';
}

}?>