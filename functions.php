<?php 


require_once 'inc/load.php';

/* Links */
$argVar = array(
	'radio' => '',
	'email' => '',
	'facebook' => 'https://www.facebook.com/portalvoxnoticias',
	'instagram' => 'https://www.instagram.com/portalvoxnoticias/',
	'twitter' => 'https://twitter.com/VoxPortal',
	'youtube' => 'https://www.youtube.com/channel/UCUDSOj95b6BnumPefDM641Q',
	'appstore' => '',
	'googleplay' => '',
	'quebracabeca' => '',

	'inicio' => 7,
	'ofertas' => 13,
	'encarte' => 32993,
	'lamina' => 32995,
	'sobre' => 11,
	'sac' => 17,
	'lojas' => 15,
	'fidelidade' => 50,
	'trabalhe' => 19,
	'promocoes' => 21,
);
InfoVar::save($argVar);
?>