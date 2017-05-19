<?php

/**
 * Função para armazenar pontos de localização 
 * na tabela wp_localization.
 * */


 global $wpdb;
 $table_name  = $wpdb->prefix . "localization";	
 $localidades = $wpdb->get_results("SELECT * from $table_name");
 
 
 

 

 
foreach ( $localidades as $xl )
{
	echo $xl->nome;
} 
  

 //echo do_shortcode('[MultipleMarkerMap id="MultipleMarkerMapDemo" z="22" lat="'.$l->latitude.'" lon="'.$l->longitude.'" marker="'.$l->longitude.','.$l->latitude.',Testando,http://testes/wp/wordpress-4.7.5/localidades/pin.png'); foreach ( $localidades as $l ) { echo  do_shortcode('| '.$l->latitude.','.$l->longitude.','.$l->nome.',http://testes/wp/wordpress-4.7.5/localidades/pin.png)"'; } echo do_shortcode("' w="520" h="442"])';
 
 
 
 // Montando array-shortcode
 $detalhes_localidade .= '';
 $array_shortcode .= '';
 foreach ( $localidades as $l ) 
 { 
 	$detalhes_localidade .= $l->nome.' - '.$l->estado.' - Lat:'.$l->latitude.' & Lon:'.$l->longitude;
 	
 	$array_shortcode     .=' | '.$l->latitude.','.$l->longitude.','.$detalhes_localidade.',http://testes/wp/wordpress-4.7.5/localidades/pin.png'; 
 }
 
 
 

 echo do_shortcode('[MultipleMarkerMap id="MultipleMarkerMapDemo" z="2" lat="-5.4983977" lon="-39.3206241" marker="-5.4983977,-39.3206241,Terra da Luz - Ceará - Lat:-5.4983977 & Lon:-39.3206241,http://testes/wp/wordpress-4.7.5/localidades/pin.png '.$array_shortcode.'" w="520" h="442"]');
 
 
 
 
 
 ?>
 
 
 
