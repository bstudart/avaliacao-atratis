<?php

/**
* Plugin Name: Pontos de Localização
* Description: Pontos de Localização para Mapa
* Version: 1.0
* Author: Benjamin Studart
* Author URI: http://bstudart.890m.com/localizations/
**/

// Padrão DB / Options / Defaults					
function ss_options_install() 
{
    global $wpdb;
    $table_name      = $wpdb->prefix . "localization";
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
	  `id_localidade` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	  `nome`          varchar(60) NOT NULL,
	  `estado`        varchar(30) NOT NULL,
	  `cidade`        varchar(30) NOT NULL,
	  `latitude`      varchar(50) NOT NULL,
	  `longitude`     varchar(50) NOT NULL,
	  `detalhes`      text,
	  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);
}

// executa os scripts de instalação após a ativação do plug-in
register_activation_hook(__FILE__, 'ss_options_install');

//menu itens
add_action('admin_menu','pt_localization_modifymenu');

function pt_localization_modifymenu() 
{
	//Menu
	add_menu_page('Localizações', 				//page title
		'Localizações', 						//menu title
		'manage_options', 						//capabilities
		'pt_localization_list', 				//menu slug
		'pt_localization_list' 					//function
	);
	
	//Submenu
	add_submenu_page('pt_localization_list', 	//parent slug
		'Nova Localização',					    //page title
		'Adicionar Nova',						//menu title
		'manage_options', 						//capability
		'pt_localization_create', 				//menu slug
		'pt_localization_create' 				//function
	);
	
	//Submenu HIDDEN
	add_submenu_page(null, 						//parent slug
		'Atualizar Localização', 				//page title
		'Atualizar', 							//menu title
		'manage_options', 						//capability
		'pt_localization_update', 				//menu slug
		'pt_localization_update' 				//function
	);
}

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'localization-list.php');
require_once(ROOTDIR . 'localization-create.php');
require_once(ROOTDIR . 'localization-update.php');
