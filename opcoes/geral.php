<?php

$nome_tema = "Configurações Adicionais";
$nome_reduzido = "wprtb";
$versao= "2.0";



// Create theme options
global $options;
$options = array (

array( "name" => "Geral",
 "type" => "section"),

array( "type" => "open"),

array( "name" => "Logo",
 "desc" => "Cole o caminho da imagem a ser usada como logo do site",
 "id" => $nome_reduzido."_logo",
 "type" => "text" ,
 "std" => ""),

array( "name" => "Postagens por página",
 "desc" => "Informe a quantidade de postagens a serem exibidas nas paginaçãoes das páginas de listagem do site.",
 "id" => $nome_reduzido."_qtdpostsporpagina",
 "type" => "text",
 "std" => "10"),

array( "name" => "Texto do Rodapé",
 "desc" => "Digite o texto do rodapé do site",
 "id" => $nome_reduzido."_texto_rodape",
 "type" => "textarea",
 "std" => "WP Responsible Theme Boilerplate - Um modelo em Português para criação de tema Wordpress"),

array( "type" => "close"),

array( "name" => "Esquema de cores",
 "type" => "section",
 "id" => "esquemacores"),

array( "type" => "open"),

array( "name" => "Fundo do site",
 "desc" => "Escolha a cor de fundo a ser aplicada ao Fundo do Site.",
 "id" => $nome_reduzido."_esquemacores_fundoSite",
 "type" => "color" ,
 "std" => "#eeeeee"),

array( "name" => "Fundo do cabeçalho do site",
 "desc" => "Escolha a cor de fundo a ser aplicada ao Fundo do Site.",
 "id" => $nome_reduzido."_esquemacores_fundoCabecalhoSite",
 "type" => "color" ,
 "std" => "#e23d54"),

array( "name" => "Título do Site",
 "desc" => "Escolha a cor do texto a ser aplicada ao Título do Site.",
 "id" => $nome_reduzido."_esquemacores_tituloSite",
 "type" => "color" ,
 "std" => "#F2E7CB"),

array( "name" => "Descrição do Site",
 "desc" => "Escolha a cor do texto a ser aplicada á Descrição do Site",
 "id" => $nome_reduzido."_esquemacores_descricaoSite",
 "type" => "color" ,
 "std" => "#F2E7CB"),

array( "name" => "Fundo do Menu",
 "desc" => "Escolha a cor de fundo ser aplicada no menu do Site",
 "id" => $nome_reduzido."_esquemacores_fundoMenuSite",
 "type" => "color" ,
 "std" => "#FFFFFF"),

array( "name" => "Texto do Menu",
 "desc" => "Escolha a cor a ser aplicada no texto menu do Site",
 "id" => $nome_reduzido."_esquemacores_textoMenuSite",
 "type" => "color" ,
 "std" => "#8D8D8D"),

array( "name" => "Barra Lateral",
 "desc" => "Escolha a cor a ser aplicada na barra lateral do Site",
 "id" => $nome_reduzido."_esquemacores_barraLateralSite",
 "type" => "color" ,
 "std" => "#FFFFFF"),

array( "name" => "Rodapé",
 "desc" => "Escolha a cor a ser aplicada no Rodapé do Site",
 "id" => $nome_reduzido."_esquemacores_rodapeSite",
 "type" => "color" ,
 "std" => "#252525"),

array( "name" => "Texto do Rodapé",
 "desc" => "Escolha a cor a ser aplicada no Texto do Rodapé do Site",
 "id" => $nome_reduzido."_esquemacores_textoRodapeSite",
 "type" => "color" ,
 "std" => "#8D8D8D"),

array( "type" => "close"),

array( "name" => "Miniaturas",
 "type" => "section"),

array( "type" => "open"),

array( "name" => "Miniatura",
 "desc" => "Caminho da imagem padrão: 220 x 137 pixels",
 "id" => $nome_reduzido."_alt_thumbnail",
 "type" => "text", 
 "std" => ""),

array( "name" => "Anúncio",
 "desc" => "Caminho da imagem padrão: 220 x 220 pixels",
 "id" => $nome_reduzido."_alt_anuncio",
 "type" => "text", 
 "std" => ""),

array( "name" => "Foto Galeria - Home",
 "desc" => "Caminho da imagem padrão: 390 x 245 pixels",
 "id" => $nome_reduzido."_alt_foto_galeria_home",
 "type" => "text", 
 "std" => ""),

array( "name" => "Foto Pequena Galeria - Home",
 "desc" => "Caminho da imagem padrão: 185 x 139 pixels",
 "id" => $nome_reduzido."_alt_foto_galeria_home_pequena",
 "type" => "text", 
 "std" => ""),

array( "name" => "Galeria de Fotos",
 "desc" => "Caminho da imagem padrão: 190 x 152 pixels",
 "id" => $nome_reduzido."_alt_foto_galeria",
 "type" => "text", 
 "std" => ""),

array( "name" => "Bispo/Coordenador/Reitor/Padre(sidebar)",
 "desc" => "Caminho da imagem padrão: 285 x 242 pixels",
 "id" => $nome_reduzido."_alt_palavrabispo",
 "type" => "text", 
 "std" => ""),

array( "name" => "Miniaturas do Clero",
 "desc" => "Caminho da imagem padrão: 190 x 222 pixels",
 "id" => $nome_reduzido."_alt_bispo_padre",
 "type" => "text", 
 "std" => ""),

array( "name" => "Paróquias/Obras Sociais/Pastorais e Movimentos",
 "desc" => "Caminho da imagem padrão: 192 x 152 pixels",
 "id" => $nome_reduzido."_alt_paroquias",
 "type" => "text", 
 "std" => ""),


array( "name" => "Paróquia - Home",
 "desc" => "Caminho da imagem padrão: 185 x 134 pixels",
 "id" => $nome_reduzido."_alt_paroquia_home",
 "type" => "text", 
 "std" => ""),


array( "name" => "Notícias(pequena) - Home",
 "desc" => "Caminho da imagem padrão: 268 x 200 pixels",
 "id" => $nome_reduzido."_alt_noticia_home_pequena",
 "type" => "text", 
 "std" => ""),

array( "name" => "Notícias(grande) - Home",
 "desc" => "Caminho da imagem padrão: 364 x 363 pixels",
 "id" => $nome_reduzido."_alt_noticia_home",
 "type" => "text", 
 "std" => ""),


array( "type" => "close"),


array( "name" => "Redes sociais",
 "type" => "section"),

array( "type" => "open"),



array( "name" => "Twitter",
 "desc" => "Nome do perfil",
 "id" => $nome_reduzido."_twitterid",
 "type" => "text",
 "std" => ""),

array( "name" => "Página Facebook",
 "desc" => "Nome da página",
 "id" => $nome_reduzido."_facebookid",
 "type" => "text",
 "std" => ""),

array( "name" => "Perfil do Google Plus",
 "desc" => "Nome do perfil na URL",
 "id" => $nome_reduzido."_googleplusid",
 "type" => "text",
 "std" => ""),

array( "name" => "Feeds",
 "desc" => "URL do Feed",
 "id" => $nome_reduzido."_feedurl",
 "type" => "text",
 "std" => ""),

array( "type" => "close"),


array( "name" => "Páginas Incorporadas",
 "type" => "section"),

array( "type" => "open"),



array( "name" => "Contato - Formulário",
 "desc" => "Shortcode do formulário de Contato",
 "id" => $nome_reduzido."_formcontato",
 "type" => "textarea",
 "std" => ""),

array( "name" => "Pedido de Oração",
 "desc" => "Shortcode do formulário de Pedido de Oração",
 "id" => $nome_reduzido."_formpedidooracao",
 "type" => "textarea",
 "std" => ""),

array( "type" => "close"));


function wprtb_add_admin() {

 global $nome_tema, $nome_reduzido, $options;

 if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {

	 if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){

		 foreach ( $options as $value ) {
			 if ( array_key_exists('id', $value) ) {
				 if ( isset( $_REQUEST[ $value['id'] ] ) ) {
				 	update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
				 }
				 else {
				 	delete_option( $value['id'] );
				 }			
			 }
		}

		header("Location: admin.php?page=".basename(__FILE__)."&saved=true");
	}
	else if ( isset ($_REQUEST['action']) && 
			( 'reset' == $_REQUEST['action'] ) ) 
	{
		 foreach ($options as $value) 
		 {
		 	if ( array_key_exists('id', $value) ) 
		 	{
		 		delete_option( $value['id'] );
			 }	
		 }

		 // #TODO Implementar criação o menu

	 	header("Location: admin.php?page=".basename(__FILE__)."&reset=true");

	 }
	 else if ( isset ($_REQUEST['action']) && isset ($_REQUEST['section']))
 	 {
 	 	$section = explode("_",$_REQUEST['action'] );

		if(count($section) > 1 && 'reset_individual' ==  $section[0] ) {
			
			# Encontrar as opções do vetor

			$prefix_option_id = "_".$_REQUEST['section'];	 
			$options_to_reset = array();

			foreach ($options as $value) {
				if(strpos($value,$prefix_option_id ) !== false)
				{
					delete_option( $value['id'] );
				}
			}
		}

	 	header("Location: admin.php?page=".basename(__FILE__)."&reset=true");

	 }
	 else if ( isset ($_REQUEST['action']) && 
			( 'resetmenu' == $_REQUEST['action'] ) ) 
	{
	 	 CriarMenu('principal','main-menu');
	 }
 }

add_menu_page($nome_tema, $nome_tema, 'administrator', basename(__FILE__), 'wprtb_admin');
add_submenu_page(basename(__FILE__), $nome_tema . ' Options', 'Theme Options', 'administrator',  basename(__FILE__),'wprtb_admin'); // Default
}






function wprtb_admin() {

    global $nome_tema, $nome_reduzido, $version, $options;
	$i=0;

	if ( isset ($_REQUEST['saved']) && ($_REQUEST['saved'] ) )echo '<div id="message" class="updated fade"><p><strong>As configurações foram salvas.</strong></p></div>';
	if ( isset ($_REQUEST['reset']) && ($_REQUEST['reset'] ) ) echo '<div id="message" class="updated fade"><p><strong>As configurações originais do site '.$nome_tema.' foram restauradas.</strong></p></div>';

?>

<div class="wrap ">
<div class="options_wrap">
<h2 class="settings-title">Configurações do Tema</h2>
<ul>
	<li>
<form method="post">

<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "section":
?>
	<div class="section_wrap">
	<h3 class="section_title"><?php echo $value['name']; ?></h3>
	
 	<div class="section_body">

 		<?php if( isset ($value['id'])){ ?>
	<input type="hidden" value="<?php echo $value['id']; ?>" name="section" />
	<?php } ?>

<?php
break;
case 'text':
?>

	<div class="options_input options_text">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
	</div>

<?php
break;
case 'textarea':
?>
	<div class="options_input options_textarea">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	</div>

<?php
break;
case 'select':
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
		<?php foreach ($value['options'] as $option) { ?>
				<option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
		</select>
	</div>

<?php
break;
case "radio":
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		  <?php foreach ($value['options'] as $key=>$option) {
			$radio_setting = get_option($value['id']);
			if($radio_setting != ''){
				if ($key == get_option($value['id']) ) {
					$checked = "checked=checked";
					} else {
						$checked = "";
					}
			}else{
				if($key == $value['std']){
					$checked = "checked=checked";
				}else{
					$checked = "";
				}
			}?>
			<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
			<?php } ?>
	</div>

<?php
break;

case "checkbox":

?>
	<div class="options_input options_checkbox">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<?php if(get_option($value['id']))
		{ 
				$checked = "checked=checked";
		}
		else
		{ 
			$checked = "";
	    } ?>

		<input type="checkbox" 
		name="<?php echo $value['id']; ?>" 
		id="<?php echo $value['id']; ?>"
		value='true' <?php echo $checked; ?> />
		<label for="<?php echo $value['id']; ?>">
			<?php echo $value['name']; ?>
		</label>
	 </div>

<?php
break;

case "file":

?>
	<div class="options_input options_checkbox">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<?php if(get_option($value['id']))
		{ 
				$checked = "checked=checked";
		}
		else
		{ 
			$checked = "";
	    } ?>

		<input type="file" 
		name="<?php echo $value['id']; ?>" 
		id="<?php echo $value['id']; ?>"
		value='true' <?php echo $checked; ?> />
		<label for="<?php echo $value['id']; ?>"
			<?php echo $value['name']; ?>
		</label>
	 </div>

<?php
break;
case 'color':
?>

	<div class="options_input options_text">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
	</div>

<?php
break;

case "close":
$i++;
?>

<span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Salvar configurações" /></span>

</div><!--#section_body-->
</div><!--#section_wrap-->

<?php break;
}
}
?>
<input type="hidden" name="action" value="save"  />
<span class="submit" style="padding-right: 81px;">
<input name="save" type="submit" value="Salvar todas as configurações"  />
</span>
</form>




<li>
<form method="post">
<span class="submit">
<input name="reset-menu" type="submit" value="Recriar menu padrão" />
<input type="hidden" name="action" value="resetmenu" />
</span>
</form>
</li>

<li>
<form method="post">
<span class="submit">
<input name="reset" type="submit" value="Restaurar todas as configurações" />
<input type="hidden" name="action" value="reset" />
</span>
</form>

</li>
</ul>

<br/>
</div><!--#options-wrap-->

</div> <!--#wrap-->
<?php
}
add_action('admin_init', 'wprtb_add_init');
add_action('admin_menu' , 'wprtb_add_admin');



function wprtb_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("p2hCss", $file_dir."/opcoes/geral.css", false, "1.0", "all");
wp_enqueue_script("p2hScript", $file_dir."/opcoes/geral.js", false, "1.0");

}


?>