add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
function new_royalslider_add_custom_skin($skins) {
	$skins['myCustomSkin'] = array(
		'label' => 'The custom skin',
		'path' => 'http://example.com/full-path-to-your-custom-skin.css'
	);
	return $skins;
}