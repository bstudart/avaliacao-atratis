<?php

/**
 * Função para listar pontos de localização cadastrados
 * na tabela wp_localization.
 * */

function pt_localization_list() { ?>

    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/localizations/style-admin.css" rel="stylesheet" />
   
    <div class="wrap">
        <h2>Localizações</h2>
        
        <div class="tablenav top">
            <div class="alignleft actions">
                <a href="<?php echo admin_url('admin.php?page=pt_localization_create'); ?>">Adicionar Nova</a>
            </div>
            <br class="clear">
        </div>
        
        <?php
	        global $wpdb;
	        $table_name  = $wpdb->prefix . "localization";	
	        $localidades = $wpdb->get_results("SELECT * from $table_name");
        ?>
        
        <?php if ($localidades){?>        
        <table class='wp-list-table widefat fixed striped posts'>
            <tr>
                <th class="manage-column ss-list-width">ID</th>
                <th class="manage-column ss-list-width">Nome</th>
                <!-- <th class="manage-column ss-list-width">Estado</th> -->
                <!-- <th class="manage-column ss-list-width">Cidade</th> -->
                <!-- <th class="manage-column ss-list-width">Latitude</th> -->
                <!-- <th class="manage-column ss-list-width">Longitude</th> -->
                <th class="manage-column ss-list-width">Detalhes</th>
                <!-- <th class="manage-column ss-list-width">Data Registro</th> -->
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($localidades as $l) { ?>
                <tr>
                    <td class="manage-column ss-list-width"><?php echo $l->id_localidade; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $l->nome; ?></td>
                    <!-- <td class="manage-column ss-list-width"><?php //echo $l->estado; ?></td> -->
                    <!-- <td class="manage-column ss-list-width"><?php //echo $l->cidade; ?></td> -->
                    <!-- <td class="manage-column ss-list-width"><?php //echo $l->latitude; ?></td> -->
                    <!-- <td class="manage-column ss-list-width"><?php //echo $l->longitude; ?></td> -->
                    <td class="manage-column ss-list-width"><?php echo $l->detalhes; ?></td>
                   <!--  <td class="manage-column ss-list-width"><?php //echo $l->data_registro; ?></td> -->
                    <td><a href="<?php echo admin_url('admin.php?page=pt_localization_update&id_localidade='.$l->id_localidade); ?>">Visualizar</a></td>
                </tr>
            <?php } ?>
        </table>
        <?php }else{?>
        	<div class="updated" style="border-left-color: red;"><p>Nenhuma localidade cadastrada até o momento!</p></div>
        <?php }?>
    </div>
    <?php
}