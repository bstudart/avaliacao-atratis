<?php

/**
 * Função para Atualizar ponto de localização cadastrado
 * na tabela wp_localization.
 **/

function pt_localization_update() 
{
	//variáveis
    global $wpdb;
    $table_name    = $wpdb->prefix . "localization";
    $id_localidade = $_GET["id_localidade"];
    $nome          = $_POST["nome"];
    $estado        = $_POST["estado"];
    $cidade        = $_POST["cidade"];
    $latitude      = $_POST["latitude"];
    $longitude     = $_POST["longitude"];
    $detalhes      = $_POST["detalhes"];
    
	//update
    if (isset($_POST['update'])) 
    {
        $wpdb->update(
			//table
            $table_name,            
        	//data
			array('nome' => $nome, 'estado' => $estado, 'cidade' => $cidade, 'latitude' => $latitude, 'longitude' => $longitude, 'detalhes' => $detalhes),
			//where
			array('id_localidade' => $id_localidade),     
			//data format
			array('%s'),            
			//where format
            array('%s')             
        );
    }

    //delete
    else if (isset($_POST['delete'])) {
        $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id_localidade = %d", $id_localidade));
    } 
    //update
    else {
        $localidade = $wpdb->get_results($wpdb->prepare("SELECT * from $table_name where id_localidade=%d", $id_localidade));
        foreach ($localidade as $l) {
            $nome 		= $l->nome;
            $estado 	= $l->estado;
            $cidade 	= $l->cidade;
            $latitude 	= $l->latitude;
            $longitude 	= $l->longitude;
            $detalhes 	= $l->detalhes;
        }
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/localizations/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Localização</h2>

        <?php if ($_POST['delete']) { ?>
            <div class="updated"><p>Localização Removida</p></div>
            <a href="<?php echo admin_url('admin.php?page=pt_localization_list') ?>">&laquo; Voltar</a>

        <?php } else if ($_POST['update']) { ?>
            <div class="updated"><p>Localização Atualizada</p></div>
            <a href="<?php echo admin_url('admin.php?page=pt_localization_list') ?>">&laquo; Voltar</a>

        <?php } else { ?>
            <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                <table class='wp-list-table widefat fixed'>
	                <tr>
	                    <th class="ss-th-width">* Nome</th>
	                    <td><input type="text" name="nome" value="<?php echo $nome; ?>" class="ss-field-width" required="required" /></td>
	                </tr>
	                <tr>
	                    <th class="ss-th-width">* Estado</th>
	                    <td><input type="text" name="estado" value="<?php echo $estado; ?>" class="ss-field-width" required="required" /></td>
	                </tr>
	                <tr>
	                    <th class="ss-th-width">* Cidade</th>
	                    <td><input type="text" name="cidade" value="<?php echo $cidade; ?>" class="ss-field-width" required="required" /></td>
	                </tr>
	                <tr>
	                    <th class="ss-th-width">* Latitude</th>
	                    <td><input type="text" name="latitude" value="<?php echo $latitude; ?>" class="ss-field-width" required="required" /></td>
	                </tr>
	                <tr>
	                    <th class="ss-th-width">* Longitude</th>
	                    <td><input type="text" name="longitude" value="<?php echo $longitude; ?>" class="ss-field-width" required="required" /></td>
	                </tr>
	                <tr>
	                    <th class="ss-th-width">* Detalhes</th>
	                    <td><input type="text" name="detalhes" value="<?php echo $detalhes; ?>" class="ss-field-width" required="required" /></td>
	                </tr>
                </table>
                <input type="submit" name="update" value="Salvar" class="button"> &nbsp;&nbsp;
                <input type="submit" name="delete" value="Remover" class="button" style=" color: red;" onclick="return confirm('&iquest; Tem certeza que deseja remover este ponto de localização?')">
            </form>
        <?php } ?>

    </div>
    <?php
}