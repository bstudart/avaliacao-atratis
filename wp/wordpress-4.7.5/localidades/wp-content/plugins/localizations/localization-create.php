<?php

/**
 * Função para armazenar pontos de localização 
 * na tabela wp_localization.
 * */

function pt_localization_create() 
{
	// variáveis
    $nome          = $_POST["nome"];
    $estado        = $_POST["estado"];
    $cidade        = $_POST["cidade"];
    $latitude      = $_POST["latitude"];
    $longitude     = $_POST["longitude"];
    $detalhes      = $_POST["detalhes"];
    
    //insert
    if (isset($_POST['insert'])) 
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "localization";

        $wpdb->insert(
        		//table
                $table_name,			
        		//data	
                array('nome' => $nome, 'estado' => $estado, 'cidade' => $cidade, 'latitude' => $latitude, 'longitude' => $longitude, 'detalhes' => $detalhes), 
                //data format
        		array('%s', '%s', '%s', '%s', '%s', '%s') 					 		
        );
        
        $message.="Localidade armazenada com sucesso!";
    }
    ?>
    
    <!-- Estilo na admin -->
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/localizations/style-admin.css" rel="stylesheet" />
    
    <div class="wrap">
        <h2>Nova Localização</h2>
        
        <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>

        <a href="<?php echo admin_url('admin.php?page=pt_localization_list') ?>">&laquo; Voltar</a>
        
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <p>Preencha os campos abaixo:</p>
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
            <input type="submit" name="insert" value="Salvar" class="button">
        </form>
    </div>
<?php
}